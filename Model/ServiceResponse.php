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
 * @property string $message
 */
class ServiceResponse
{
    public $status,
        $message;

    /**
     * ServiceResponse constructor.
     *
     * @param bool $status
     * @param string $message
     *
     * @internal param string $result
     */
    public function __construct(bool $status, string $message)
    {
        $this->status = $status;
        $this->message = $message;
    }
}