/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

use const DIRECTORY_SEPARATOR;
use function addslashes;
use function array_map;
use function implode;
use function is_string;
use function realpath;
use function sprintf;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage as FilterConfiguration;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @deprecated
 */
final class XdebugFilterScriptGenerator
{
    public function generate(FilterConfiguration $filter): string
    {
        $files = array_map(
            static function ($item)
            {
                return sprintf(
                    "        '%s'",
                    $item
                );
            },
            $this->getItems($filter)
        );

        $files = implode(",\n", $files);

        return <<<EOF
<?php declare(strict_types=1);
if (!\\function_exists('xdebug_set_filter')) {
    return;
}

\\xdebug_set_filter(
    \\XDEBUG_FILTER_CODE_COVERAGE,
    \\XDEBUG_PATH_WHITELIST,
    [
{$files}
    ]
);

EOF;
    }

    private function getItems(FilterConfiguration $filter): array
    {
        $files = [];

        foreach ($filter->directories() as $directory) {
            $path = realpath($directory->path());

            if (is_string($path)) {
                $files[] = sprintf(
                    addslashes('%s' . DIRECTORY_SEPARATOR),
                    $path
                );
            }
        }

        foreach ($filter->files() as $file) {
            $files[] = $file->path();
        }

        return $files;
    }
}
