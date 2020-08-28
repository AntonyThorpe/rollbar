<?php

namespace AntonyThorpe\Rollbar;

use SilverStripe\Core\Config\Configurable;

/**
 * Rollbar
 */
class Rollbar
{
    use Configurable;

    /**
     * Access Token created at rollbar.com
     * @var string
     */
    private static $client_token = '';

    /**
     * Operate/pause communications with Rollbar
     * @var boolean
     */
    private static $show = true;

    /**
     * When in the dev environment, show Rollbar in the template
     * @var boolean
     */
    private static $show_on_dev = false;

    /**
     * When in the test environment, show Rollbar in the template
     * @var boolean
     */
    private static $show_on_test = false;

    /**
     * When in the live environment, show Rollbar in the template
     * @var boolean
     */
    private static $show_on_live = true;
}
