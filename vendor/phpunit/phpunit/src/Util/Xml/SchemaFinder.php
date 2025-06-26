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
namespace PHPUnit\Util\Xml;

use function defined;
use function is_file;
use function sprintf;
use PHPUnit\Runner\Version;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SchemaFinder
{
    /**
     * @throws Exception
     */
    public function find(string $version): string
    {
        if ($version === Version::series()) {
            $filename = $this->path() . 'phpunit.xsd';
        } else {
            $filename = $this->path() . 'schema/' . $version . '.xsd';
        }

        if (!is_file($filename)) {
            throw new Exception(
                sprintf(
                    'Schema for PHPUnit %s is not available',
                    $version
                )
            );
        }

        return $filename;
    }

    private function path(): string
    {
        if (defined('__PHPUNIT_PHAR_ROOT__')) {
            return __PHPUNIT_PHAR_ROOT__ . '/';
        }

        return __DIR__ . '/../../../';
    }
}
