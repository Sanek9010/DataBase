<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 09.12.2017
 * Time: 13:51
 */

namespace DataBaseBundle\Entity;


class Task
{
    protected $task;
    protected $wtfDate;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getWtfDate()
    {
        return $this->wtfDate;
    }

    public function setWtfDate(\DateTime $wtfDate = null)
    {
        $this->wtfDate = $wtfDate;
    }
}