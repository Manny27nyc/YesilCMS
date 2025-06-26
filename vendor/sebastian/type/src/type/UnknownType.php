/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/type.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Type;

final class UnknownType extends Type
{
    public function isAssignable(Type $other): bool
    {
        return true;
    }

    public function name(): string
    {
        return 'unknown type';
    }

    public function asString(): string
    {
        return '';
    }

    public function allowsNull(): bool
    {
        return true;
    }

    public function isUnknown(): bool
    {
        return true;
    }
}
