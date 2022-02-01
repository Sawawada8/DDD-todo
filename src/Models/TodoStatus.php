<?php

namespace Src\Models;

use Src\Models\ValueObject\TodoStatusInterface;
use Src\Models\ValueObject\TodoDoing;
use Src\Models\ValueObject\TodoFailed;
use Src\Models\ValueObject\TodoComplete;

class TodoStatus {
    /** @var TodoStatusInterface */
    private $status;

    public function __construct(TodoStatusInterface $status)
    {
        $this->status = $status;
    }


    public function getStatus()
    {
        return $this->status;
    }
}

