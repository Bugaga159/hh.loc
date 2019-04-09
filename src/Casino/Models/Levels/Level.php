<?php

namespace Casino\Models\Levels;

use Casino\Models\ActiveRecordEntity;
class Level extends ActiveRecordEntity
{
    protected $title;
    protected $coefficient;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCoefficient(): int
    {
        return $this->coefficient;
    }

    protected static function getTableName(): string
    {
        return 'subjects';
    }
}