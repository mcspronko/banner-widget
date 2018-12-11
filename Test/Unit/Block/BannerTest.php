<?php


namespace Pronko\BannerWidget\Test\Unit\Block;

use Magento\Widget\Block\BlockInterface;
use PHPUnit\Framework\TestCase;
use Pronko\BannerWidget\Block\Banner;
use Magento\Framework\View\Element\Template\Context;

class BannerTest extends TestCase
{
    /**
     * @var Banner
     */
    private $object;

    protected function setUp()
    {
        $contextMock = $this->getMockBuilder(Context::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->object = new Banner($contextMock);
    }

    public function testBannerInstance()
    {
        $this->assertInstanceOf(Banner::class, $this->object);
    }

    public function testImplementsBlockInterface()
    {
        $this->assertInstanceOf(BlockInterface::class, $this->object);
    }
}
