<?php

namespace Casino\Models\Subjects;

use Casino\Models\ActiveRecordEntity;

class Subject extends ActiveRecordEntity
{
    private $title;
    private $amount;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    protected static function getTableName(): string
    {
        return 'subjects';
    }
}