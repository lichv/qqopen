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
 * UserServiceProvider.php.
 *
 * Part of Overtrue\QQopen.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    allen05ren <allen05ren@outlook.com>
 * @copyright 2016 overtrue <i@overtrue.me>
 *
 * @see       https://github.com/overtrue/qqopen
 * @see       http://overtrue.me
 */

namespace QQopen\Foundation\ServiceProviders;

use QQopen\ShakeAround\ShakeAround;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ShakeAroundServiceProvider.
 */
class ShakeAroundServiceProvider implements ServiceProviderInterface
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
        $pimple['shakearound'] = function ($pimple) {
            return new ShakeAround($pimple['access_token']);
        };
    }
}
