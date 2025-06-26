/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * This file is part of vfsStream.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package  org\bovigo\vfs
 */
namespace org\bovigo\vfs;
/**
 * Directory container.
 */
class DotDirectory extends vfsStreamDirectory
{
    /**
     * returns iterator for the children
     *
     * @return  vfsStreamContainerIterator
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return new \ArrayIterator(array());
    }

    /**
     * checks whether dir is a dot dir
     *
     * @return  bool
     */
    public function isDot()
    {
        return true;
    }
}
