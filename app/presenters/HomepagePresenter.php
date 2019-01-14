<?php

namespace App\Presenters;

class HomepagePresenter extends BasePresenter
{


    public function __construct()
    {
    }

    public function renderDefault(){

    }

//    public function createComponentThumb()
//    {
//
//     $form = new UI\Form();
//     $form->addText('url');
//     $form->addSubmit('submit','sub');
//     $form->onSuccess[] = [$this ,'thumbSucceeded'];
//     return $form;
//    }

//    public function thumbSucceeded(UI\Form $form, $values){
//        libxml_use_internal_errors(true);
//        $doc = new \DOMDocument();
//
//        set_error_handler([$this, "warning_handler"], E_WARNING);
//
//            $doc->loadHTML(file_get_contents($values->url));
//        restore_error_handler();
////extrahování meta tagů
//        $xpath = new \DOMXPath($doc);
//        $query = '//*/meta[starts-with(@property, \'og:\')]';
////        $qry = '//*/img[@data-icy-veins]';
////        $div = $xpath->query($qry);
////        foreach ($div as $divs){
////            Debugger::barDump($divs->getAttribute('src'));
////        }
//
//
//        $metas = $xpath->query($query);
//        foreach ($metas as $meta) {
//            $property = $meta->getAttribute('property');
//            $content = $meta->getAttribute('content');
//            if($property === "og:image"){
//                Debugger::barDump(getimagesize($content));
//                //ziská výšku a čířku a přetransformuje je aby měla šířku 750
//                $size = getimagesize($content);
//                $resizeValue = $size[0] / 650 ;
//                $width  = $size[0] / $resizeValue;
//                $height = $size[1] / $resizeValue;
//                //vložení do tabulky
//                $this->database->table('odkaz')->insert([
//                    'imgUrl' => $content,
//                    'width' => $width,
//                    'height' => $height
//                ]);
//                $this->flashMessage("hotovo", "success");
//                $this->redirect("this");
//            }
//
//        }
//
//        $this->flashMessage("url nema thumbnail", "warning");
//        $this->redirect("this");
//
//
//    }



    function warning_handler($errno, $errstr){
        restore_error_handler();
        $this->flashMessage("to co jste zadali není url", "danger");
        $this->redirect("this");
    }


}