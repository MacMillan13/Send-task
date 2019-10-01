<?php

namespace App\Logic\Task;

use App\Logic\Services\ThirdService;
use App\Model\ServiceResponse;
use App\Model\Task;

/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 10:11
 */
class ViewTask extends AbstractTask
{
    const TYPE = 1;
    const MIN = 500;
    private $service;

    public function __construct()
    {
        $this->service = new ThirdService();
    }

    /**
     * В это классе можем делать различные преобразования и затем отправляем на сервис
     *
     * @param Task $task
     *
     * @return ServiceResponse
     */
    public function do(Task $task): ServiceResponse
    {
        $this->checkTaskParams($task, self::MIN);
        return $this->service->sendTask($task);
    }
}