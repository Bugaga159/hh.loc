<?php

namespace Casino\Models\Users;

class User
{
	private $id;
	private $nikename;
	private $email;
	private $isConfirmed;
	private $role;
	private $points;
	private $money;
	private $level;

	public function __set($name, $value)
  {
      $camelCaseName = $this->underscoreToCamelCase($name);
      $this->$camelCaseName = $value;
  }

  private function underscoreToCamelCase(string $source): string
  {
      return lcfirst(str_replace('_', '', ucwords($source, '_')));
  }

	public function getId(): int
	{
		return $this->id;
	}

	public function $getNikename(): string
	{
		return $this->$nikename;
	}

	public function getEmail(): string
	{
		return $this->$email;
	}

	public function getIsConfirmed(): string
	{
		return $this->$isConfirmed;
	}

	public function getRole(): string
	{
		return $this->role;
	}

	public function getPoints(): int
	{
		return $this->$points;
	}

	public function getMoney(): int
	{
		return $this->$money;
	}

	public function getLevel(): string
	{
		return $this->$level;
	}

}
