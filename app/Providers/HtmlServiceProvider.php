<?php

namespace App\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use App\Components\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    /**
     * Register the HTML builder instance.
     */
    protected function registerHtmlBuilder()
    {
        $this->app->singleton('html', function ($app) {
            return new HtmlBuilder($app['config'], $app['view'], $app['url']);
        });
    }
}
