<?php namespace WPU\WPUltimoInstaller\Test;

use WPU\WPUltimoInstaller\RemoteFilesystem;

class RemoteFilesystemTest extends \PHPUnit_Framework_TestCase
{
    protected $io;
    protected $config;

    protected function setUp()
    {
        $this->io = $this->getMock('Composer\IO\IOInterface');
    }

    public function testExtendsComposerRemoteFilesystem()
    {
        $this->assertInstanceOf(
            'Composer\Util\RemoteFilesystem',
            new RemoteFilesystem('', $this->io)
        );
    }

    // Inspired by testCopy of Composer
    public function testCopyUsesWpuFileUrl()
    {
        $wpuFileUrl = 'file://'.__FILE__;
        $rfs = new RemoteFilesystem($wpuFileUrl, $this->io);
        $file = tempnam(sys_get_temp_dir(), 'pb');

        $this->assertTrue(
            $rfs->copy('http://example.org', 'does-not-exist', $file)
        );
        $this->assertFileExists($file);
        unlink($file);
    }
}
