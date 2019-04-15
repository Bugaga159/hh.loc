<?php

namespace Casino\Models\Users;

use Casino\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    protected $firstName;
    protected $lastName;
	protected $nikename;
	protected $email;
	protected $isConfirmed;
	protected $role;
	protected $points;
	protected $money;
	protected $idLevel;
	protected $passwordHash;
	protected $authToken;

    /**
     * @return string
     */
	public function getFirstName():string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName():string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
	public function getNikename(): string
	{
		return $this->nikename;
	}

    /**
     * @return string
     */
	public function getEmail(): string
	{
		return $this->email;
	}

    /**
     * @return string
     */
	public function getIsConfirmed(): string
	{
		return $this->isConfirmed;
	}

    /**
     * @return string
     */
	public function getRole(): string
	{
		return $this->role;
	}

    /**
     * @return int
     */
	public function getPoints(): int
	{
		return $this->points;
	}

    /**
     * @return int
     */
	public function getMoney(): int
	{
		return $this->money;
	}

    /**
     * @return mixed
     */
	public function getLevel()
	{
		return $this->idLevel;
	}

    /**
     * @return string
     */
    protected static function getTableName(): string
    {
        return 'users';
    }

    /**
     * @param string $firstName
     * @return string
     */
    public function setFirstName(string $firstName): string
    {
        return $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     * @return string
     */
    public function setLasrName(string $lastName):string
    {
        return $this->lastName = $lastName;
    }

    /**
     * @param string $newNikename
     * @return string
     */
    public function setNikename(string $newNikename)
    {
    	return $this->nikename = $newNikename;
    }

    /**
     * @param int $money
     * @return int
     */
    public function setMoney(int $money): int
    {
        return $this->money = $money;
    }

    /**
     * @param int $points
     * @return int
     */
    public function setPoints(int $points): int
    {
        return $this->points = $points;
    }
}
