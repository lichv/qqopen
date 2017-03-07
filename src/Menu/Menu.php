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
 * Menu.php.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 *
 * @see      https://github.com/lichv
 * 
 */

namespace QQopen\Menu;

use QQopen\Core\AbstractAPI;

/**
 * Class Menu.
 */
class Menu extends AbstractAPI
{
    const API_CREATE = 'https://api.mp.qq.com/cgi-bin/menu/create';
    const API_GET = 'https://api.mp.qq.com/cgi-bin/menu/get';
    const API_DELETE = 'https://api.mp.qq.com/cgi-bin/menu/delete';
    
    /**
     * Get all menus.
     *
     * @return \QQopen\Support\Collection
     */
    public function all()
    {
        return $this->parseJSON('get', [self::API_GET]);
    }

    /**
     * Add menu.
     *
     * @param array $buttons
     * @param array $matchRule
     *
     * @return bool
     */
    public function add(array $buttons)
    {

        return $this->parseJSON('json', [self::API_CREATE, ['button' => $buttons]]);
    }

    /**
     * Destroy menu.
     *
     * @param int $menuId
     *
     * @return bool
     */
    public function destroy($menuId = null)
    {

        return  $this->parseJSON('get', [self::API_DELETE]);
    }

}
