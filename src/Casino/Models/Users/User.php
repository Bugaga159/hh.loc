<?php

namespace Casino\Models\Users;

use Casino\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
	private $nikename;
	private $email;
	private $isConfirmed;
	private $role;
	private $points;
	private $money;
	private $idLevel;
	private $passwordHash;
	private $authToken;


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

	public function getLevel(): string
	{
		return $this->idLevel;
	}

    protected static function getTableName(): string
    {
        return 'users';
    }

}
