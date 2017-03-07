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
 * JsServiceProvider.php.
 *
 * This file is part of the qqopen.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace QQopen\Foundation\ServiceProviders;

use QQopen\Js\Js;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class JsServiceProvider.
 */
class JsServiceProvider implements ServiceProviderInterface
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
        $pimple['js'] = function ($pimple) {
            $js = new Js($pimple['access_token']);
            $js->setCache($pimple['cache']);

            return $js;
        };
    }
}
