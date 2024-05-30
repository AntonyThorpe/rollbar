<?php

namespace AntonyThorpe\Rollbar;

use SilverStripe\Control\Director;
use SilverStripe\Core\Config\Config;
use SilverStripe\Core\Extension;
use AntonyThorpe\Rollbar\Rollbar;

/**
 * Extend Page class to provide variables to Rollbar.ss
 */
class RollbarPageExtension extends Extension
{
    /**
     * Show/no-show of the Rollbar javascript file as set in your config
     */
    public function getShowRollbar(): bool
    {
        if (Director::isLive() && Rollbar::config()->show_on_live && Rollbar::config()->show) {
            return true;
        }

        if (Director::isDev() && Rollbar::config()->show_on_dev && Rollbar::config()->show) {
            return true;
        }
        return Director::isTest() && Rollbar::config()->show_on_test && Rollbar::config()->show;
    }

    /**
     * Provide the site id to the template
     */
    public function getRollbarClientToken(): string
    {
        return Rollbar::config()->client_token;
    }
}
