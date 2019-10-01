<?php
namespace App\Controller;

use App\Logic\TaskLogic;
use App\Model\Task;

/**
 * Created by PhpStorm.
 * User: Vladya
 * Date: 01.10.2019
 * Time: 10:08
 */
class MainController
{
    /**
     * отправляем задачу по раскрутке страницы на внешние апи
     */
    public function actionSendTask()
    {
        $post = $_POST;

        $taskLogic = new TaskLogic();

        $task = new Task($post['url'], $post['type'], $post['username'], $post['need']);

        return $taskLogic->doTask($task);
    }
}