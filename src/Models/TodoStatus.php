<?php

namespace App\Models;

class TodoStatus {
    private $status;

    public function __construct(string $status)
    {
        if (status === 0 || status === 1) {
            throw new Exception('不正なステータスです。');
        }
        $this->status = $status;
    }
}
