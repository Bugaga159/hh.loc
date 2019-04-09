<?php

namespace Casino\Models\Users;

use Casino\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
	protected $nikename;
	protected $email;
	protected $isConfirmed;
	protected $role;
	protected $points;
	protected $money;
	protected $idLevel;
	protected $passwordHash;
	protected $authToken;


	public function getNikename(): string
	{
		return $this->nikename;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function getIsConfirmed(): string
	{
		return $this->isConfirmed;
	}

	public function getRole(): string
	{
		return $this->role;
	}

	public function getPoints(): int
	{
		return $this->points;
	}

	public function getMoney(): int
	{
		return $this->money;
	}

	public function getLevel()
	{
		return $this->idLevel;
	}

    protected static function getTableName(): string
    {
        return 'users';
    }

    public function setNikename(string $newNikename)
    {
    	return $this->nikename = $newNikename;
    }

}
