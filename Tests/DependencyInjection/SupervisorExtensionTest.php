<?php

/*
 * This file is part of the OsLabSupervisorBundle package.
 *
 * (c) OsLab <https://github.com/OsLab>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OsLab\SupervisorBundle\Tests\DependencyInjection;

use OsLab\SupervisorBundle\DependencyInjection\OsLabSupervisorExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class SupervisorExtensionTest extends \PHPUnit_Framework_TestCase
{
    private $extension;
    private $container;

    protected function setUp()
    {
        $this->extension = new OsLabSupervisorExtension();

        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
    }

    public function testWithoutConfiguration()
    {
        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();

        $this->assertFalse($this->container->has('oslab.supervisor.managert'));
    }

    public function testManagerConfiguration()
    {
        $this->loadConfiguration($this->container, 'manager');
        $this->container->compile();

        $this->assertTrue($this->container->has('oslab.supervisor.manager'));
    }

    protected function loadConfiguration(ContainerBuilder $container, $resource)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../../Resources/config'));
        $loader->load($resource.'.xml');
    }
}
