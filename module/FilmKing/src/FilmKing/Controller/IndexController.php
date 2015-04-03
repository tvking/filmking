<?php
namespace FilmKing\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $viewModel = new ViewModel(
            ['message' => 'hazzar']
        );
        $viewModel->setTemplate('home');

        return $viewModel;
    }
}
