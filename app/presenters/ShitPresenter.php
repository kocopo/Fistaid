<?php

namespace App\Presenters;

class ShitPresenter extends BasePresenter
{


    public function renderDefault(){

        $this->flashMessage("Pro přístup na tuto stránku se musíte nejprve přihlásit.", "success");
    }


}