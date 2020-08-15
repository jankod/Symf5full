<?php


namespace App\Entity;


use DateTime;

class Task
{
    protected ?string $task = null;

    protected DateTime $dueDate;

    function __construct()
    {
        $this->dueDate = new DateTime();
    }

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    /**
     * @return DateTime
     */
    public function getDueDate(): DateTime
    {
        return $this->dueDate;
    }

    /**
     * @param DateTime $dueDate
     */
    public function setDueDate(DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

}