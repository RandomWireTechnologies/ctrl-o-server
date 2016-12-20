<?php

/**
 * app/Console/Commands/JobMakeCommand.php
 *
 * Local job make command, overrides Laravel.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Console\Commands;

use Illuminate\Foundation\Console\JobMakeCommand as BaseJobMakeCommand;

class JobMakeCommand extends BaseJobMakeCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('sync')) {
            return __DIR__.'/stubs/job.stub';
        } else {
            return __DIR__.'/stubs/job-queued.stub';
        }
    }
}
