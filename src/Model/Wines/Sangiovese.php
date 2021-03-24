<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;


class Sangiovese extends FoodTypes
{

    public function query() {
        $this->meatPork();
        $this->dairyPungentCheese();
        $this->vegetableAlliums();
        $this->vegetableNightshades();
        $this->vegetableFunghi();
        $this->herbsRedPepper();
        $this->herbsExotic();

        return true;
    }
    public function option() {
        $this->meatRedMeat();
        $this->meatCuredMeat();
        $this->meatPoultry();
        $this->dairySoftCheese();
        $this->dairyHardCheese();
        $this->vegetableBeans();
        $this->herbsBlackPepper();
        $this->herbsHerbs();
        $this->herbsBaking();
        $this->starchWhiteStarches();
        $this->starchPotato();

        return true;
    }
}
