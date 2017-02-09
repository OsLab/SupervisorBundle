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

use Symfony\Component\DependencyInjection\ContainerBuilder;

class SupervisorExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testUserLoadThrowsExceptionUnlessDatabaseDriverSet()
    {
        $loader = new SupervisorExtensionTest();
        $config = $this->getEmptyConfig();

        $loader->load(array($config), new ContainerBuilder());
    }
}
