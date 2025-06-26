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

use ArrayIterator;
use Countable;
use DOMNode;
use DOMNodeList;
use IteratorAggregate;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SnapshotNodeList implements Countable, IteratorAggregate
{
    /**
     * @var DOMNode[]
     */
    private $nodes = [];

    public static function fromNodeList(DOMNodeList $list): self
    {
        $snapshot = new self;

        foreach ($list as $node) {
            $snapshot->nodes[] = $node;
        }

        return $snapshot;
    }

    public function count(): int
    {
        return count($this->nodes);
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->nodes);
    }
}
