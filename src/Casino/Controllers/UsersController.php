<?php

namespace Casino\Controllers;

use Casino\Models\Users\User;
use Casino\View\View;

class UsersController
{
    /** @var View */
    private $view;

    private $user;

    private $userId = 1;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->user = User::getById( $this->userId);
    }

    public function signUp()
    {
        $this->view->renderHtml('authentication/signUp.php');
    }

    public function signIn()
    {
        $this->view->renderHtml('authentication/signIn.php');
    }
    public function userInfo()
    {
        $this->view->renderHtml('user/user.php', ['user' => $this->user]);
    }

    public function convertMoney()
    {
        if(!empty($_POST['point'])){
            $moneyConvert = $_POST['point'] + $this->user->getPoints();
        }else{
            $moneyConvert = $this->user->getPoints();
        }

        $this->view->renderHtml('user/convert.php', ['user' => $this->user, 'moneyConvert'=> $moneyConvert]);
    }

    public function edit(int $userId): void
    {
        $userConf = User::getById($userId);
        if($userConf === null){
            $this->view->renderHtml('errors/404.php', [], 404);
            return; 
        }

        $userConf->setNikename('Admin');
        $userConf->save();
    }
}
