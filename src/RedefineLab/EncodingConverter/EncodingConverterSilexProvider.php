<?php

namespace RedefineLab\EncodingConverter;

use Silex\ServiceProviderInterface;

class EncodingConverterSilexProvider implements ServiceProviderInterface
{

    public function boot(\Silex\Application $app)
    {
        // Nothing to do here
    }

    public function register(\Silex\Application $app)
    {
        $app['encoder.internal'] = $app->share(function () use ($app) {
            return new InternalEncodingConverter();
        });
        $app['encoder.identity'] = $app->share(function () use ($app) {
            return new IdentityEncoder();
        });
    }

}