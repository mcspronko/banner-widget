<?php


namespace Pronko\BannerWidget\Test\Integration;

use PHPUnit\Framework\TestCase;
use Magento\TestFramework\Helper\Bootstrap;
use Pronko\BannerWidget\Block\Banner;

/**
 * @magentoAppArea frontend
 */
class BannerTest extends TestCase
{
    /**
     * @var Banner
     */
    private $object;

    protected function setUp()
    {
        $objectManager = Bootstrap::getObjectManager();
        $this->object = $objectManager->get(Banner::class);
    }

    public function testToHtml()
    {
        $title = 'test title<a>';
        $expectedTitle = 'test title&lt;a&gt;';
        $subtitle = 'test<a>subtitle';
        $expectedSubtitle = 'test&lt;a&gt;subtitle';
        $parentDivCssClass = 'block-pronko-banner';
        $template = 'Pronko_BannerWidget::widget/banner/showcase.phtml';

        $this->object->setTemplate($template);
        $this->object->setData('title', $title);
        $this->object->setData('subtitle', $subtitle);

        $html = $this->object->toHtml();

        $this->assertContains($expectedTitle, $html);
        $this->assertContains($expectedSubtitle, $html);

        $this->assertContains($parentDivCssClass, $html);
    }
}
