<?php

namespace Src\Models\ValueObject;


class TodoComplete  implements TodoStatusInterface {
    /** @var string */
    private $status;

    public function __construct()
    {
        $this->status = 'complete';
    }

    public function getStatus()
    {
        return $this->status;
    }
}

