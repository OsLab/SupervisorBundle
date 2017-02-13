<?php

/*
 * This file is part of the OsLabSupervisorBundle package.
 *
 * (c) OsLab <https://github.com/OsLab>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OsLab\SupervisorBundle\Manager;

use OsLab\Supervisor\SupervisorProcess;

/**
 * Class SupervisorManager
 *
 * @author Michael COULLERET <michael@coulleret.pro>
 */
class SupervisorManager
{
    /**
     * @var SupervisorProcess
     */
    protected $supervisorProcess;

    /**
     * Constructor.
     *
     * @param SupervisorProcess $supervisorProcess
     */
    public function __construct(SupervisorProcess $supervisorProcess)
    {
        $this->supervisorProcess = $supervisorProcess;
    }

    /**
     * Get supervisor process
     *
     * @return string
     */
    public function getSupervisorProcess()
    {
        return $this->supervisorProcess->getStatus();
    }
}
