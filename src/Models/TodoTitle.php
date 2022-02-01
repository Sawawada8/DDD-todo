<?php

namespace Src\Models;

class TodoTitle {
    public $title;

    const MIN_LENGTH = 3;

    public function __construct(string $title)
    {
        if (strlen(title) < MIN_LENGTH) {
            throw new Exception(' TODOタイトルは３文字以上である必要があります。');
        }
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
