<?php


class TodoTitle {
    public $title;

    const MIN_LENGTH = 3;

    public function __construct(string $title)
    {
        if (strlen(title) < MIN_LENGTH) {
            throw new Exception('文字数が３文字以下です。');
        }
        $this->title = $title;
    }
}
