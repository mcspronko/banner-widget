<?php


namespace Pronko\BannerWidget\Test\Integration;

use Magento\Framework\Phrase;
use Magento\TestFramework\Helper\Bootstrap;
use Magento\Widget\Model\Widget;
use PHPUnit\Framework\TestCase;

class WidgetTest extends TestCase
{
    /**
     * @var Widget
     */
    private $widget;

    protected function setUp()
    {
        $objectManager = Bootstrap::getObjectManager();
        $this->widget = $objectManager->create(Widget::class);
    }

    public function testBannerWidget()
    {
        $widgetName = 'Pronko Banner';
        $widgetCode = 'pronko_banner';
        $widgetType = 'Pronko\BannerWidget\Block\Banner';

        $filters = ['name' => $widgetName];
        $widgets = $this->widget->getWidgetsArray($filters);

        $this->assertCount(1, $widgets);

        $bannerWidget = reset($widgets);

        $this->assertContains($widgetCode, $bannerWidget['code']);
        $this->assertContains($widgetType, $bannerWidget['type']);
        $this->assertInstanceOf(Phrase::class, $bannerWidget['name']);
        $this->assertContains($widgetName, $bannerWidget['name']->__toString());
    }
}

