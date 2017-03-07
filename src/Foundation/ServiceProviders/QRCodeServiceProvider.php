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
 * QRCodeServiceProvider.php.
 *
 * Part of Overtrue\QQopen.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015
 *
 * @see      https://github.com/lichv/qqopen
 * 
 */

namespace QQopen\Foundation\ServiceProviders;

use QQopen\QRCode\QRCode;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class QRCodeServiceProvider.
 */
class QRCodeServiceProvider implements ServiceProviderInterface
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
        $pimple['qrcode'] = function ($pimple) {
            return new QRCode($pimple['access_token']);
        };
    }
}
