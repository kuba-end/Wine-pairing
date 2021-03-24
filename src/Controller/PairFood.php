<?php

namespace KubaEnd\Controller;

use KubaEnd\Model\Interfaces\MealInterface;
use KubaEnd\Model\SelectedWineQuery;
use KubaEnd\Model\UniversalConnect;

class PairFood
{
    private object $wine;
    private string $try;
    private object $hookup;

    public function goodEnough():void
    {
        $this->try = implode("", $_POST);
        $this->hookup = UniversalConnect::doConnect();
        $this->selectedType($this->wine = new SelectedWineQuery());

    }
    public function goodEnough2():void
    {
        $this->try = implode("", $_POST);
        $this->hookup = UniversalConnect::doConnect();
        $this->selectedType2($this->wine = new SelectedWineQuery());
    }

    public function selectedType(MealInterface $wine):void
    {
        $wine->selectedType($this->try);
    }
    public function selectedType2(MealInterface $wine):void
    {
        $wine->selectedType2($this->try);
    }
}

