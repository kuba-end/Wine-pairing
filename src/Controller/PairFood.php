<?php

namespace KubaEnd\Controller;

use KubaEnd\Model\Interfaces\MealInterface;
use KubaEnd\Model\SelectedWineQuery;
use KubaEnd\Model\UniversalConnect;

class PairFood
{
    public object $wine;
    public $try;
    public object $hookup;

    public function __construct(){
        $this->try=implode("",$_POST);
        $this->hookup=UniversalConnect::doConnect();
        $this->selectedType($this->wine=new SelectedWineQuery());

    }
    public function selectedType(MealInterface $wine){
        $wine->selectedType($this->try);
    }

}

