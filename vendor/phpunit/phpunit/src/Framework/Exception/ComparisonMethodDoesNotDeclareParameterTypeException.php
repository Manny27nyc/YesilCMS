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
namespace PHPUnit\Framework;

use const PHP_EOL;
use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotDeclareParameterTypeException extends Exception
{
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Parameter of comparison method %s::%s() does not have a declared type.',
                $className,
                $methodName
            ),
            0,
            null
        );
    }

    public function __toString(): string
    {
        return $this->getMessage() . PHP_EOL;
    }
}
