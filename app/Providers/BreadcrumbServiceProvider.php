<?php

/**
 * app/Providers/BreadcrumbServiceProvider.php
 *
 * Service provider for managing breadcrumbs.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Providers;

use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('breadcrumb', function () {
            return $this->app->make('CtrlServer\Services\Breadcrumbs');
        });
    }
}
