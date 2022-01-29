<?php

namespace App\Models;

use Exception;

class Todo {
    private $title;
    private $status;

    const MIN_LENGTH = 3;

    public function __construct(TodoTitle $title, TodoStatus $status)
    {

        $this->title = $title;
        $this->status = $status;
    }
}
