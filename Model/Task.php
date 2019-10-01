<?php

namespace App\Model;
/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 10:26
 */

/**
 * @property string $url
 * @property int $type
 * @property string $username
 * @property int $need
 */
class Task
{
    public $url,
        $type,
        $username,
        $need;

    /**
     * Task constructor.
     *
     * @param string $url
     * @param int $type
     * @param string $username
     * @param int $need
     */
    public function __construct(string $url, int $type, string $username, int $need) {
        $this->url = $url;
        $this->type = $type;
        $this->username = $username;
        $this->need = $need;
    }
}