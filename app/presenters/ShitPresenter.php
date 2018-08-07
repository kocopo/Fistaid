<?php

namespace App\Presenters;

use Nette;

class ShitPresenter extends Nette\Application\UI\Presenter
{


    public function renderDefault(){
        $this->flashMessage("Pro přístup na tuto stránku se musíte nejprve přihlásit.", "success");
    }

}