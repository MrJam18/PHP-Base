<?php
declare(strict_types=1);
require_once 'Comment.php';


class TaskService
{
    static function addComment(User $author, Task $task, string $text){
        $comment = new Comment($author, $task, $text);
        $task->addComment($comment);
    }

}