<?php

namespace Casino\Controllers;

use Casino\Services\Db;
use Casino\View\View;

class UsersController
{
    /** @var View */
    private $view;

    /** @var Db */
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function signUp()
    {
        $this->view->renderHtml('authentication/signUp.php');
    }

    public function signIn()
    {
        $this->view->renderHtml('authentication/signIn.php');
    }
    public function userConf()
    {
        $this->view->renderHtml('user/user.php');
    }
}
