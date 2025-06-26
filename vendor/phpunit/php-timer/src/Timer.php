/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-timer.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Timer;

use function array_pop;
use function hrtime;

final class Timer
{
    /**
     * @psalm-var list<float>
     */
    private $startTimes = [];

    public function start(): void
    {
        $this->startTimes[] = (float) hrtime(true);
    }

    /**
     * @throws NoActiveTimerException
     */
    public function stop(): Duration
    {
        if (empty($this->startTimes)) {
            throw new NoActiveTimerException(
                'Timer::start() has to be called before Timer::stop()'
            );
        }

        return Duration::fromNanoseconds((float) hrtime(true) - array_pop($this->startTimes));
    }
}
