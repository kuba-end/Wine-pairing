<?php
declare(strict_types=1);


namespace KubaEnd\Model\Wines;


use KubaEnd\Model\Abstracts\FoodTypes;
use KubaEnd\Model\Interfaces\StrainInterface;

class SauvignonBlanc extends FoodTypes implements StrainInterface
{
    public function query(){
        self::meatFish();
        self::vegetableGreen();
        self::vegetableBeans();
        self::herbsHerbs();
    }
    public function option(){
        self::meatPoultry();
        self::meatMollusk();
        self::meatLobster();
        self::dairySoftCheese();
        self::dairyPungentCheese();
        self::vegetableAlliums();
        self::vegetableNuts();
        self::herbsRedPepper();
        self::herbsHotSpicy();
        self::starchWhiteStarches();
        self::starchPotato();
    }
}