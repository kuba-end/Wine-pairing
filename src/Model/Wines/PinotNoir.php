<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class PinotNoir extends FoodTypes implements StrainInterface
{
    public function query()
    {
        self::meatCuredMeat();
        self::meatPoultry();
        self::dairySoftCheese();
        self::vegetableFunghi();
    }
    public function option()
    {
        self::vegetableAlliums();
        self::vegetableNuts();
        self::herbsHerbs();
        self::herbsExotic();
        self::starchWhiteStarches();
        self::starchWholeWheat();
        self::starchPotato();
    }
}