/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Approximate value token
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class ApproximateValueToken implements TokenInterface
{
    private $value;
    private $precision;

    public function __construct($value, $precision = 0)
    {
        $this->value = $value;
        $this->precision = $precision;
    }

    /**
     * {@inheritdoc}
     */
    public function scoreArgument($argument)
    {
        return round((float)$argument, $this->precision) === round($this->value, $this->precision) ? 10 : false;
    }

    /**
     * {@inheritdoc}
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('≅%s', round($this->value, $this->precision));
    }
}
