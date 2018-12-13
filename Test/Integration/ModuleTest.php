<?php


namespace Pronko\BannerWidget\Test\Integration;

use Magento\TestFramework\Helper\Bootstrap;
use PHPUnit\Framework\TestCase;
use Magento\Framework\Module\ModuleList\Loader;

class ModuleTest extends TestCase
{
    /**
     * @var Loader
     */
    private $config;

    protected function setUp()
    {
        $objectManager = Bootstrap::getObjectManager();
        $this->config = $objectManager->create(Loader::class);
    }

    public function testModuleSequence()
    {
        $moduleName = 'Pronko_BannerWidget';
        $expectedDependencies = ['Magento_Widget'];
        $modulesList = $this->config->load();

        $this->assertArrayHasKey($moduleName, $modulesList);

        $moduleConfig = $modulesList[$moduleName];
        $this->assertContains($expectedDependencies, $moduleConfig);
    }
}