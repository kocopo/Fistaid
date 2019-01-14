<?php

namespace App\Presenters;

use Nette\Application\UI;
use Tracy\Debugger;


abstract class BasePresenter extends UI\Presenter
{

    public function __construct()
    {
        if(!isset($_SESSION['theme']) || !isset($_SESSION['textColor']) || !isset($_SESSION['bgcolor'])){
            $_SESSION['theme'] = 'bg-light';
            $_SESSION['textColor'] = 'text-dark';
            $_SESSION['bgcolor'] = 'white';
        }

    }


    protected function createComponentChangeTheme()
{
    $form = new UI\Form;
    $form->addSubmit('change', 'Změnit téma');
    $form->onSuccess[] = [$this, 'changeThemeSucceeded'];
    return $form;
}

public function changeThemeSucceeded(UI\Form $form, $values){
        Debugger::barDump($_SESSION);
        Debugger::barDump($_SESSION['theme'] === 'bg-light');
        if($_SESSION['theme'] === 'bg-light'){
            $_SESSION['theme'] = 'bg-dark';
            $_SESSION['textColor'] = 'text-light';
            $_SESSION['bgcolor'] = '#1b1e21';
        }else{
            $_SESSION['theme'] = 'bg-light';
            $_SESSION['textColor'] = 'text-dark';
            $_SESSION['bgcolor'] = 'white';
        }

    $this->redirect('this');
}

}