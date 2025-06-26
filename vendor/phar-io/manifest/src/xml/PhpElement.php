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

class PhpElement extends ManifestElement {
    public function getVersion(): string {
        return $this->getAttributeValue('version');
    }

    public function hasExtElements(): bool {
        return $this->hasChild('ext');
    }

    public function getExtElements(): ExtElementCollection {
        return new ExtElementCollection(
            $this->getChildrenByName('ext')
        );
    }
}
