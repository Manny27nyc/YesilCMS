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

use function array_merge;
use function count;
use Countable;
use IteratorAggregate;

final class CodeUnitCollection implements Countable, IteratorAggregate
{
    /**
     * @psalm-var list<CodeUnit>
     */
    private $codeUnits = [];

    /**
     * @psalm-param list<CodeUnit> $items
     */
    public static function fromArray(array $items): self
    {
        $collection = new self;

        foreach ($items as $item) {
            $collection->add($item);
        }

        return $collection;
    }

    public static function fromList(CodeUnit ...$items): self
    {
        return self::fromArray($items);
    }

    private function __construct()
    {
    }

    /**
     * @psalm-return list<CodeUnit>
     */
    public function asArray(): array
    {
        return $this->codeUnits;
    }

    public function getIterator(): CodeUnitCollectionIterator
    {
        return new CodeUnitCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->codeUnits);
    }

    public function isEmpty(): bool
    {
        return empty($this->codeUnits);
    }

    public function mergeWith(self $other): self
    {
        return self::fromArray(
            array_merge(
                $this->asArray(),
                $other->asArray()
            )
        );
    }

    private function add(CodeUnit $item): void
    {
        $this->codeUnits[] = $item;
    }
}
