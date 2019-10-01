<?php

namespace App\Model;
/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 11:54
 */

/**
 * @property bool $status
 * @property string $result
 */
class ServiceResponse
{
    public $status,
        $result;

    /**
     * ServiceResponse constructor.
     *
     * @param bool $status
     * @param string $result
     */
    public function __construct(bool $status, string $result)
    {
        $this->status = $status;
        $this->result = $result;
    }
}