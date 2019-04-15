<?php

namespace Casino\Controllers;

use Casino\Models\Levels\Level;
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
        $levelUser = Level::getById($this->user->getLevel());

        $this->view->renderHtml('user/user.php', ['user' => $this->user, 'levelUser' => $levelUser]);
    }

    public function convertMoney()
    {
        $levelUser = Level::getById($this->user->getLevel());

        if(!empty($_POST['point']) and $this->user->getMoney() >= $_POST['point']){
            $pointsConvert = (int)($_POST['point'] * $levelUser->getCoefficient()) + $this->user->getPoints();
            $moneyConvert = ($this->user->getMoney() - $_POST['point']);
            $userConf = User::getById($this->userId);

            if($userConf === null){
                $this->view->renderHtml('errors/404.php', [], 404);
                return;
            }

            $userConf->setMoney($moneyConvert);
            $userConf->setPoints($pointsConvert);
            $userConf->save();
            unset($_POST['point']);
            $this->view->renderHtml('user/convert.php', ['user' => $this->user, 'levelUser' => $levelUser]);
        }else{
            $this->view->renderHtml('user/convert.php', ['user' => $this->user, 'levelUser' => $levelUser]);
        }


    }

    /**
     * @param int $userId
     */
    public function edit(int $userId): void
    {
        $userConf = User::getById($this->userId);
        if($userConf === null){
            $this->view->renderHtml('errors/404.php', [], 404);
            return; 
        }

        $userConf->setNikename('Admin');
        $userConf->setMoney(1000);
        $userConf->setPoints(100);
        $userConf->save();
    }
}
