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
 * Group.php.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 *
 * @see      https://github.com/lichv
 * 
 */

namespace QQopen\User;

use QQopen\Core\AbstractAPI;

/**
 * Class Group.
 */
class Group extends AbstractAPI
{
    const API_GET = 'https://api.mp.qq.com/cgi-bin/groups/get';
    const API_CREATE = 'https://api.mp.qq.com/cgi-bin/groups/create';
    const API_UPDATE = 'https://api.mp.qq.com/cgi-bin/groups/update';
    const API_DELETE = 'https://api.mp.qq.com/cgi-bin/groups/delete';
    const API_USER_GROUP_ID = 'https://api.mp.qq.com/cgi-bin/groups/getid';
    const API_MEMBER_UPDATE = 'https://api.mp.qq.com/cgi-bin/groups/members/update';

    /**
     * Create group.
     *
     * @param string $name
     *
     * @return int
     */
    public function create($name)
    {
        $params = [
                   'group' => ['name' => $name],
                  ];

        return $this->parseJSON('json', [self::API_CREATE, $params]);
    }

    /**
     * List all groups.
     *
     * @return array
     */
    public function lists()
    {
        return $this->parseJSON('get', [self::API_GET]);
    }

    /**
     * Update a group name.
     *
     * @param int    $groupId
     * @param string $name
     *
     * @return bool
     */
    public function update($groupId, $name)
    {
        $params = [
                   'group' => [
                               'id' => $groupId,
                               'name' => $name,
                              ],
                  ];

        return $this->parseJSON('json', [self::API_UPDATE, $params]);
    }

    /**
     * Delete group.
     *
     * @param int $groupId
     *
     * @return bool
     */
    public function delete($groupId)
    {
        $params = [
                   'group' => ['id' => $groupId],
                  ];

        return $this->parseJSON('json', [self::API_DELETE, $params]);
    }

    /**
     * Get user group.
     *
     * @param string $openId
     *
     * @return int
     */
    public function userGroup($openId)
    {
        $params = ['openid' => $openId];

        return $this->parseJSON('json', [self::API_USER_GROUP_ID, $params]);
    }

    /**
     * Move user to a group.
     *
     * @param string $openId
     * @param int    $groupId
     *
     * @return bool
     */
    public function moveUser($openId, $groupId)
    {
        $params = [
                   'openid' => $openId,
                   'to_groupid' => $groupId,
                  ];

        return $this->parseJSON('json', [self::API_MEMBER_UPDATE, $params]);
    }
}
