<?php
namespace Application\Modules\Main\Controllers;

class Poll extends \Saros\Application\Controller
{
    public function init() {
       
    }
    
    public function indexAction()
    {
        $this->view->headStyles()->addStyle("poll");
    }
    
    public function solutionAction()
    {                                                      
    }
}
