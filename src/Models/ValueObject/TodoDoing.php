<?php

namespace Src\Models\ValueObject;

class TodoDoing  implements TodoStatusInterface {
    /** @var string */
    private $status;

    public function __construct()
    {
        $this->status = 'doing';
    }

    public function getStatus()
    {
        return $this->status;
    }
}

