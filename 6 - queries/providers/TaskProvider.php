<?php
declare(strict_types=1);
require_once './models/Task.php';


class TaskProvider
{
   function getUndoneList(): array
    {
        $tasks = $this->getTasks();
        $tasks = array_filter($tasks, fn(Task $el)=> !$el->getIsDone() && $el);
        if(is_array($tasks)) return $tasks;
        else return [];
    }

    function getArchiveList(): array
    {
        $tasks = $this->getTasks();
        return array_filter($tasks, fn(Task $el)=> $el->getIsDone() && el);
    }

    function addTask(string $description, int $priority, User $user, DateTime $desiredDateDone): void
    {
        $task = new Task($description, $priority, $user, $desiredDateDone);
        $_SESSION['tasks'][] = $task;
    }

    function addComment(User $author, Task $task, string $text){
        $comment = new Comment($author, $task, $text);
        $task->addComment($comment);
    }
    private function getTasks(): array
    {
        return $_SESSION['tasks'] ?? [];

    }
    function writeTasks($tasks){
       $_SESSION['tasks'] = $tasks;
    }


}