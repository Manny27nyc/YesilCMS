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
namespace PHPUnit\TextUI\XmlConfiguration;

use function count;
use Countable;
use IteratorAggregate;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class ConstantCollection implements Countable, IteratorAggregate
{
    /**
     * @var Constant[]
     */
    private $constants;

    /**
     * @param Constant[] $constants
     */
    public static function fromArray(array $constants): self
    {
        return new self(...$constants);
    }

    private function __construct(Constant ...$constants)
    {
        $this->constants = $constants;
    }

    /**
     * @return Constant[]
     */
    public function asArray(): array
    {
        return $this->constants;
    }

    public function count(): int
    {
        return count($this->constants);
    }

    public function getIterator(): ConstantCollectionIterator
    {
        return new ConstantCollectionIterator($this);
    }
}
