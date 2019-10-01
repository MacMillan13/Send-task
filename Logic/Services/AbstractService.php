<?php

namespace App\Logic\Services;

use App\Model\ServiceResponse;
use App\Model\Task;

/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 11:42
 */
abstract class AbstractService
{
    /**
     * @param Task $task
     *
     * @return ServiceResponse
     * @internal param int $min
     *
     */
    abstract public function sendTask(Task $task): ServiceResponse;

    /**
     * @param array $response
     *
     * @return ServiceResponse
     */
    protected function prepareResponse(array $response): ServiceResponse
    {
        return new ServiceResponse($response['status'], $response['result']);
    }
}