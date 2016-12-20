<?php

/**
 * app/Base/Job.php
 *
 * Base job abstract for jobs to extend.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Base;

use Illuminate\Bus\Queueable;

abstract class Job
{
    use Queueable;
}
