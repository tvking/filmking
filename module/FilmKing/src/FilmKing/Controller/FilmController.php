<?php
namespace FilmKing\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FilmController extends AbstractActionController
{
    public function indexAction()
    {
        $viewModel = new ViewModel();
        $viewModel->setTemplate('films/index');

        return $viewModel;
    }

    public function filmAction()
    {
        $filmId    =  $this->params()->fromRoute('id');
        $filmName  =  $this->params()->fromRoute('name');

        $viewModel = new ViewModel([
            'filmId'   => $filmId,
            'filmName' => $filmName,
        ]);
        $viewModel->setTemplate('films/film');

        return $viewModel;   
    }
}
