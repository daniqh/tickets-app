<?php
namespace App\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use App\Components\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    protected function registerHtmlBuilder()
    {
        $this->app->singleton('html', function ($app) {
            return new HtmlBuilder($app['url'], $app['view']);
        });

    }
}