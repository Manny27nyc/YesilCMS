/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/complexity.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Complexity;

/**
 * @psalm-immutable
 */
final class Complexity
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $cyclomaticComplexity;

    public function __construct(string $name, int $cyclomaticComplexity)
    {
        $this->name                 = $name;
        $this->cyclomaticComplexity = $cyclomaticComplexity;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function cyclomaticComplexity(): int
    {
        return $this->cyclomaticComplexity;
    }
}
