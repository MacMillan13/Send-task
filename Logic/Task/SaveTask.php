<?php

namespace App\Logic\Task;

use App\Logic\Services\SecondService;
use App\Model\ServiceResponse;
use App\Model\Task;

/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 10:10
 */
class SaveTask extends AbstractTask
{
    const TYPE = 0;
    const MIN = 1000;
    private $service;

    public function __construct()
    {
        $this->service = new SecondService();
    }

    /**
     * В это классе можем делать различные преобразования и затем отправляем на сервис
     *
     * @param Task $task
     *
     * @return ServiceResponse|bool
     */
    public function do(Task $task): ServiceResponse
    {
        $this->checkTaskParams($task, self::MIN);
        return $this->service->sendTask($task);
    }
}