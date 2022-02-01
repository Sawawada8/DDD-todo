<?php

namespace Src\Models;

use Exception;

class Todo {
    /** @var TodoTitle */
    private $title;
    /** @var TodoStatus */
    private $status;
    private $dueDate;


    public function __construct(TodoTitle $title, TodoStatus $status)
    {

        $this->title = $title;
        $this->status = $status;
    }
}
