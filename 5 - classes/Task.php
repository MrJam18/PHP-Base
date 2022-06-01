<?php
declare(strict_types=1);
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
    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
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
    public function isDone(): bool
    {
        return $this->isDone;
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
     * @return DateTime
     */
    public function getDesiredDateDone(): DateTime
    {
        return $this->desiredDateDone;
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


}