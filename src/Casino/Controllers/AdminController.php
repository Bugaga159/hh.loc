<?php

namespace Casino\Controllers;


use Casino\View\View;
use Casino\Models\Subjects\Subject;
use Casino\Models\Users\User;
use Casino\Models\Levels\Level;

class AdminController
{
    private $view;
    private $users;
    private $levels;

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->users = User::findAll();
        $this->levels = Level::findAll();
    }

    /**
     * Main page Admin
     */
    public function main()
    {
        $levelUser = Level::findAll();

        if($levelUser === null){
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        foreach ($levelUser as $level){
            $this->levels[$level->getId()] = $level->getTitle();
        }

        $this->view->renderHtml('admin/admin.php',['users'=> $this->users, 'levels' => $this->levels]);
    }

    public function editUser(int $userId): void
    {
        $user = User::getById($userId);
        $levelUser = Level::getById($user->getLevel());

        $this->view->renderHtml('admin/editUser.php',['user' => $user, 'levels' => $this->levels, 'levelUser' => $levelUser]);
    }
}