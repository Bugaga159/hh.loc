<?php

namespace Casino\Controllers;

use Casino\View\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main()
    {
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
        $this->view->renderHtml('main/main.php', ['number' => $number]);
    }
}
