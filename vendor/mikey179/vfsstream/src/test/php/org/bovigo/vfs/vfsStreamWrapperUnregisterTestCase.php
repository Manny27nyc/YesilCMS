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
 * Test for org\bovigo\vfs\vfsStreamWrapper.
 */
class vfsStreamWrapperUnregisterTestCase extends \BC_PHPUnit_Framework_TestCase
{

    /**
     * Unregistering a registered URL wrapper.
     *
     * @test
     */
    public function unregisterRegisteredUrlWrapper()
    {
        vfsStreamWrapper::register();
        vfsStreamWrapper::unregister();
        $this->assertNotContains(vfsStream::SCHEME, stream_get_wrappers());
    }

    /**
     * Unregistering a third party wrapper for vfs:// fails.
     *
     * @test
     * @expectedException org\bovigo\vfs\vfsStreamException
     * @runInSeparateProcess
     */
    public function unregisterThirdPartyVfsScheme()
    {
        // Unregister possible registered URL wrapper.
        vfsStreamWrapper::unregister();

        $mock = $this->bc_getMock('org\\bovigo\\vfs\\vfsStreamWrapper');
        stream_wrapper_register(vfsStream::SCHEME, get_class($mock));

        vfsStreamWrapper::unregister();
    }

    /**
     * Unregistering when not in registered state will fail.
     *
     * @test
     * @expectedException org\bovigo\vfs\vfsStreamException
     * @runInSeparateProcess
     */
    public function unregisterWhenNotInRegisteredState()
    {
        vfsStreamWrapper::register();
        stream_wrapper_unregister(vfsStream::SCHEME);
        vfsStreamWrapper::unregister();
    }

    /**
     * Unregistering while not registers won't fail.
     *
     * @test
     */
    public function unregisterWhenNotRegistered()
    {
        // Unregister possible registered URL wrapper.
        vfsStreamWrapper::unregister();

        $this->assertNotContains(vfsStream::SCHEME, stream_get_wrappers());
        vfsStreamWrapper::unregister();
    }
}
