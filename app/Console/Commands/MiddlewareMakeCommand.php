<?php

/**
 * app/Console/Commands/MiddlewareMakeCommand.php
 *
 * Local middleware make command, overrides Laravel.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Console\Commands;

use Illuminate\Routing\Console\MiddlewareMakeCommand as BaseMiddlewareMakeCommand;

class MiddlewareMakeCommand extends BaseMiddlewareMakeCommand
{
	/**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/middleware.stub';
    }
    
    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Middleware';
    }
}
