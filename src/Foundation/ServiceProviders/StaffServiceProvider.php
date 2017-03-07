<?php

/*
 * This file is part of the lichv/qqopen.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * StaffServiceProvider.php.
 *
 * This file is part of the qqopen.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace QQopen\Foundation\ServiceProviders;

use QQopen\Staff\Session;
use QQopen\Staff\Staff;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class StaffServiceProvider.
 */
class StaffServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['staff'] = function ($pimple) {
            return new Staff($pimple['access_token']);
        };

        $pimple['staff_session'] = $pimple['staff.session'] = function ($pimple) {
            return new Session($pimple['access_token']);
        };
    }
}
