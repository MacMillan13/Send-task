<?php

namespace App\Logic;

use App\Logic\Task\LikeTask;
use App\Logic\Task\SaveTask;
use App\Logic\Task\AbstractTask;
use App\Logic\Task\ViewTask;
use App\Model\ServiceResponse;
use App\Model\Task;
use Exception;

/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 10:13
 */
class TaskLogic
{
    /**
     * Здесь мы определяем по типу задачи
     * на какой сервис отправить задачу
     *
     * @param Task $task
     *
     * @return array|bool|string
     */
    public function doTask(Task $task): array
    {
        try {
            $taskDoer = $this->getTaskDoer($task->type);

            /**
             * @see SaveTask::do
             * @see ViewTask::do
             * @see LikeTask::do
             */
            $response = $taskDoer->do($task);

            return $response;

        } catch (Exception $exception) {

            return new ServiceResponse(false, $exception->getMessage());
        }
    }

    /**
     * @param int $type
     *
     * @return AbstractTask
     * @throws Exception
     */
    private function getTaskDoer(int $type): AbstractTask
    {
        switch ($type) {
            case (SaveTask::TYPE):
                $taskDoer = new SaveTask();
                break;
            case (ViewTask::TYPE):
                $taskDoer = new ViewTask();
                break;
            case (LikeTask::TYPE):
                $taskDoer = new LikeTask();
                break;
            default:
                throw new Exception('Don\'t find type of task.');
        }

        return $taskDoer;
    }
}