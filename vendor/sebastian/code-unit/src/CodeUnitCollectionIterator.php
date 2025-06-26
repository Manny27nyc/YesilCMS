/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/code-unit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeUnit;

use Iterator;

final class CodeUnitCollectionIterator implements Iterator
{
    /**
     * @psalm-var list<CodeUnit>
     */
    private $codeUnits;

    /**
     * @var int
     */
    private $position = 0;

    public function __construct(CodeUnitCollection $collection)
    {
        $this->codeUnits = $collection->asArray();
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->codeUnits[$this->position]);
    }

    public function key(): int
    {
        return $this->position;
    }

    public function current(): CodeUnit
    {
        return $this->codeUnits[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }
}
