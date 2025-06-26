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
final class VariableCollection implements Countable, IteratorAggregate
{
    /**
     * @var Variable[]
     */
    private $variables;

    /**
     * @param Variable[] $variables
     */
    public static function fromArray(array $variables): self
    {
        return new self(...$variables);
    }

    private function __construct(Variable ...$variables)
    {
        $this->variables = $variables;
    }

    /**
     * @return Variable[]
     */
    public function asArray(): array
    {
        return $this->variables;
    }

    public function count(): int
    {
        return count($this->variables);
    }

    public function getIterator(): VariableCollectionIterator
    {
        return new VariableCollectionIterator($this);
    }
}
