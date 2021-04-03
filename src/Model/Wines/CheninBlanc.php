<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class CheninBlanc extends FoodTypes implements StrainInterface
{
    public function query(){
        $this->meatCuredMeat();
        $this->vegetableNuts();
        $this->herbsHotSpicy();
        $this->herbsExotic();
        $this->starchWholeWheat();
        $this->starchSweetVege();
        $this->sweetFruit();
        return true;
    }
    public function option(){
        $this->meatLobster();
        $this->dairySoftCheese();
        $this->dairyPungentCheese();
        $this->vegetableAlliums();
        $this->vegetableRootSquash();
        $this->vegetableNightshades();
        $this->herbsRedPepper();
        $this->herbsRedPepper();
        $this->herbsBaking();
        $this->starchWhiteStarches();
        $this->starchPotato();
        $this->sweetVanilla();
        return true;
    }
}