<?php

namespace Casino\Controllers;

use Casino\Models\Users\User;
use Casino\View\View;

class MainController
{
    private $view;
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
        $idUser = 1;
        $user = User::findAll();

        if ($user === []) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }


    	if(!empty($_POST) and $_POST['prize'] == 'Play'){
    		$prizes = ['Money', 'Point', 'Subject'];
    		$numberPrize = rand(0,2);
    		$subjects = ['Car', 'House', 'iPhone'];
    		switch ($prizes[$numberPrize]) {
    			case 'Subject':
    				$numberSubject = rand(0,2);
    				$number = $subjects[$numberSubject];
    				break;
    			case 'Money':
    				$number = rand(50,300) . '$';
    				break;
    			default:
    				$number = 'Points ' . rand(100,1000);
    				break;
 			      }

  	     }
        $this->view->renderHtml('main/main.php', ['userId' => $user[0], 'number' => $number]);

    }
}
