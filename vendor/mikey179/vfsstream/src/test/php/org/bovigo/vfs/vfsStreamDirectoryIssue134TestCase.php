/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * Created by PhpStorm.
 * Project: vfsStream
 * User: Sebastian Hopfe
 * Date: 14.07.16
 * Time: 14:07
 */

namespace org\bovigo\vfs;


class vfsStreamDirectoryIssue134TestCase extends \BC_PHPUnit_Framework_TestCase
{
    /**
     * access to root directory
     *
     * @var  vfsStreamDirectory
     */
    protected $rootDirectory;

    /**
     * set up test environment
     */
    public function setUp()
    {
        $this->rootDirectory = vfsStream::newDirectory('/');
        $this->rootDirectory->addChild(vfsStream::newDirectory('var/log/app'));

    }

    /**
     * Test: should save directory name as string internal
     *
     * @small
     */
    public function testShouldSaveDirectoryNameAsStringInternal()
    {
        $dir = $this->rootDirectory->getChild('var/log/app');

        $dir->addChild(vfsStream::newDirectory(80));

        static::assertNotNull($this->rootDirectory->getChild('var/log/app/80'));
    }



    /**
     * Test: should rename directory name as string internal
     *
     * @small
     */
    public function testShouldRenameDirectoryNameAsStringInternal()
    {
        $dir = $this->rootDirectory->getChild('var/log/app');

        $dir->addChild(vfsStream::newDirectory(80));

        $child = $this->rootDirectory->getChild('var/log/app/80');
        $child->rename(90);

        static::assertNotNull($this->rootDirectory->getChild('var/log/app/90'));
    }
}
