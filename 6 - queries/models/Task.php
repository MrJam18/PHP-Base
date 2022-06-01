<?php
declare(strict_types=1);

use mysql_xdevapi\SqlStatementResult;

require_once 'User.php';

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private DateTime $desiredDateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return DateTime
     */
    public function getDateDone(): string
    {
        return $this->getStringFromDateTime($this->dateDone);
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): string
    {
        return $this->getStringFromDateTime($this->dateUpdated);
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): string
    {
        return $this->getStringFromDateTime($this->dateCreated);
    }


    public function getPriority(): string
    {
        switch ($this->priority){
            case(1):
                return 'высший';
            case(2):
                return 'средний';
            case(3):
                return 'низкий';
        }
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    function getUserName(): string
    {
        return $this->user->getUsername();
    }


    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
    function markAsDone(): void
    {
        $this->isDone = true;
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
    }
    function addComment(Comment $comment){
        $this->comments[] = $comment;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @return string
     */
    public function getDesiredDateDone(): string
    {
        return $this->getStringFromDateTime($this->desiredDateDone);
    }


    /**
     * @param DateTime $desiredDateDone
     */
    public function setDesiredDateDone(DateTime $desiredDateDone): void
    {
        $this->desiredDateDone = $desiredDateDone;
    }

    public function __construct(string $description, int $priority, User $user, DateTime $desiredDateDone)
    {   $now = new DateTime();
        $this->description = $description;
        $this->priority = $priority;
        $this->user = $user;
        $this->desiredDateDone = $desiredDateDone;
        $this->dateCreated = $now;
        $this->dateUpdated = $now;
    }
    private function getStringFromDateTime(DateTime $dateTime): string
    {
        return $dateTime->format('d.m.Y');
    }


}