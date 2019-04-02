<?php


namespace Casino\Models\Subjects;


class Subject
{
    private $id;
    private $title;
    private $amount;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}