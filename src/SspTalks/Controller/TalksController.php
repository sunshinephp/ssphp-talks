<?php

namespace SspTalks\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TalksController extends AbstractActionController
{
    public function talksAction()
    {
        $sessionsTable = $this->serviceLocator->get('SessionsTable');
        $sessions = $sessionsTable->getTalks();

        return new ViewModel(array('sessions' => $sessions));
    }
    
    public function keynotesAction()
    {
        return array();
    }

    public function tutorialsAction()
    {
        return array();
    }

    public function speakersAction()
    {
        return array();
    }

    public function scheduleAction()
    {
        $this->layout('layout/layout_no_sidebar');
        
        return array();
    }
}
