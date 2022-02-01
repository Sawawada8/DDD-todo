<?php

namespace Src\Models\ValueObject;


class TodoFailed implements TodoStatusInterface {
    /** @var string */
    private $status;

    public function __construct()
    {
        $this->status = 'failed';
    }

    public function getStatus()
    {
        return $this->status;
    }
}

