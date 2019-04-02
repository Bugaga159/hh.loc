<?php

namespace Casino\Controllers;

use Casino\Models\Subjects\Subject;
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
        $user = User::getById($idUser);
        $subjects = Subject::findAll();

        if ($user === null or $subjects === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }


    	if(!empty($_POST) and $_POST['prize'] == 'Play'){
    		$prizes = ['Money', 'Point', 'Subject'];
    		$numberPrize = rand(0,2);
    		switch ($prizes[$numberPrize]) {
    			case 'Subject':
    				$numberSubject = rand(0, count($subjects)-1);
    				$number = '1 ' . $subjects[$numberSubject]->getTitle();
    				break;
    			case 'Money':
    				$number = rand(50,300) . '$';
    				break;
    			default:
    				$number = 'Points ' . rand(100,1000);
    				break;
 			      }

  	     }
        $this->view->renderHtml('main/main.php', ['userId' => $user, 'number' => $number]);

    }
}
