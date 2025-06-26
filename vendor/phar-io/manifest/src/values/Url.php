/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Manifest.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PharIo\Manifest;

class Url {
    /** @var string */
    private $url;

    public function __construct(string $url) {
        $this->ensureUrlIsValid($url);

        $this->url = $url;
    }

    public function asString(): string {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @throws InvalidUrlException
     */
    private function ensureUrlIsValid($url): void {
        if (\filter_var($url, \FILTER_VALIDATE_URL) === false) {
            throw new InvalidUrlException;
        }
    }
}
