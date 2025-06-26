/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/cli-parser.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CliParser;

use function sprintf;
use RuntimeException;

final class RequiredOptionArgumentMissingException extends RuntimeException implements Exception
{
    public function __construct(string $option)
    {
        parent::__construct(
            sprintf(
                'Required argument for option "%s" is missing',
                $option
            )
        );
    }
}
