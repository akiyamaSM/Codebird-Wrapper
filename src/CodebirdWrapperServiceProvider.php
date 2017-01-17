<?php
namespace Inani\CodebirdWrapper;

use Codebird\Codebird;
use Illuminate\Support\ServiceProvider;

class CodebirdWrapperServiceProvider extends ServiceProvider
{
    /**
     * Register bindings
     *
     */
    public function register()
    {
        $this->app->bind(TwitterWrapper::class, function ($app) {
            $wrapper = new TwitterWrapper();
            Codebird::setConsumerKey(env('TWITTER_CONSUMER_KEY'), env('TWITTER_CONSUMER_SECRET'));
            return $wrapper->setCodeBird(Codebird::getInstance());
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [TwitterWrapper::class];
    }
}