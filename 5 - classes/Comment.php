<?php
declare(strict_types=1);

class Comment
{
    public function __construct(User $author, Task $task, string $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }

    private User $author;
    private Task $task;
    private string $text;

}