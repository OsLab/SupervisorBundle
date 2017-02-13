<?php

/*
 * This file is part of the OsLabSupervisorBundle package.
 *
 * (c) OsLab <https://github.com/OsLab>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OsLab\SupervisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Process\Process;

/**
 * Controller managing the supervisor.
 *
 * @author Michael COULLERET <michael@coulleret.pro>
 */
class SupervisorController extends Controller
{
    /**
     * Index status
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function statusAction()
    {
        return $this->render('@OsLabSupervisor/Supervisor/index.html.twig', array(
            'hostname' => gethostname(),
            'supervisor' => $this->get('oslab.supervisor.manager')->get,
        ));
    }
}
