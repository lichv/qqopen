<?php

/*
 * This file is part of the lichv/qqopen.
 *
 * (c) soone <66812590@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * QRCodeServiceProvider.php.
 *
 * Part of Overtrue\QQopen.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    soone <66812590@qq.com>
 * @copyright 2016
 *
 * @see      https://github.com/lichv/qqopen
 * 
 */

namespace QQopen\Foundation\ServiceProviders;

use QQopen\Device\Device;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class DeviceServiceProvider.
 */
class DeviceServiceProvider implements ServiceProviderInterface
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
        $pimple['device'] = function ($pimple) {
            return new Device($pimple['access_token'], $pimple['config']->get('device', []));
        };
    }
}
