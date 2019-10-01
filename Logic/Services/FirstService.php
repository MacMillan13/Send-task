<?php

namespace App\Logic\Services;

use App\Model\ServiceResponse;
use App\Model\Task;

/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 11:36
 */
class FirstService extends AbstractService
{
    /**
     * У всех сервисов есть все услуги (лайки, просмотры и тд),
     * но где-то они быстрее, где-то дешевле и тд. По этому мы
     * используем разные сервисы, для разных задач.
     *
     * Что бы сервис понимал что мы заказываем именно лайки,
     * мы передаем айди лайков 12.
     */
    const LIKE_ID = 33;

    /**
     * @param Task $task
     *
     * @return ServiceResponse
     * @internal param int $min
     *
     */
    public function sendTask(Task $task): ServiceResponse
    {
        /**
         * сделали запрос на внешний апи данного сервиса с использованием
         * Task $task, int $min,@see FirstService::LIKE_ID, теперь
         * имитируем респонс $sendTask
         */
        $sendTask = [
            'status' => true,
            'result' => 'In process',
            'someParam' => 'Some Response',
            'someParam2' => 'Some Response 2'
        ];

        return $this->prepareResponse($sendTask);
    }
}