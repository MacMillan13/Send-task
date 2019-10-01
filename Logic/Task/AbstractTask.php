<?php

namespace App\Logic\Task;

use App\Model\ServiceResponse;
use App\Model\Task;
use Exception;

/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 10:11
 */
abstract class AbstractTask
{
    /**
     * @param Task $task
     *
     * @return ServiceResponse|bool
     */
    abstract public function do(Task $task): ServiceResponse;

    protected function checkTaskParams(Task $task, int $min)
    {
        if ($task->need < $min ) {
            throw new Exception('Task need less then min');
        }
    }
}