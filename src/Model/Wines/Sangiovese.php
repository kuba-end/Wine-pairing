<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;


class Sangiovese extends FoodTypes implements StrainInterface
{

    public function query():bool {
        $this->meatPork();
        $this->dairyPungentCheese();
        $this->vegetableAlliums();
        $this->vegetableNightshades();
        $this->vegetableFunghi();
        $this->herbsRedPepper();
        $this->herbsExotic();
        return true;
    }
    public function option():bool {
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
