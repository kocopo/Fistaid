<?php

namespace App\Presenters;

use Nette;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    public function renderDefault(){
//        $this->template->posts = $this->database->table('posts')
//        ->order('created_at DESC')
//        ->limit(5);
    }

    // ...
}