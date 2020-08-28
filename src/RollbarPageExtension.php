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
     * @return boolean
     */
    public function getShowRollbar()
    {
        if (Director::isLive() && Rollbar::config()->show_on_live && Rollbar::config()->show) {
            return true;
        }

        if (Director::isDev() && Rollbar::config()->show_on_dev && Rollbar::config()->show) {
            return true;
        }

        if (Director::isTest() && Rollbar::config()->show_on_test && Rollbar::config()->show) {
            return true;
        }

        return false;
    }

    /**
     * Provide the site id to the template
     */
    public function getRollbarClientToken()
    {
        return Rollbar::config()->client_token;
    }
}
