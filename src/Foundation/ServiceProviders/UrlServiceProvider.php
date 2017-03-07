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
 * UrlServiceProvider.php.
 *
 * This file is part of the qqopen.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace QQopen\Foundation\ServiceProviders;

use QQopen\Url\Url;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class UrlServiceProvider.
 */
class UrlServiceProvider implements ServiceProviderInterface
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
        $pimple['url'] = function ($pimple) {
            return new Url($pimple['access_token']);
        };
    }
}
