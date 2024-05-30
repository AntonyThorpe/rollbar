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
     * @config
     */
    private static string $client_token = '';

    /**
     * Operate/pause communications with Rollbar
     * @config
     */
    private static bool $show = true;

    /**
     * When in the dev environment, show Rollbar in the template
     * @config
     */
    private static bool $show_on_dev = false;

    /**
     * When in the test environment, show Rollbar in the template
     * @config
     */
    private static bool $show_on_test = false;

    /**
     * When in the live environment, show Rollbar in the template
     * @config
     */
    private static bool $show_on_live = true;
}
