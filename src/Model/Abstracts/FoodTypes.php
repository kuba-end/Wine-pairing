<?php
declare(strict_types=1);


namespace KubaEnd\Model\Abstracts;


use KubaEnd\Model\Interfaces\DbQueries;
use KubaEnd\Model\Fabryka;

class FoodTypes
{
    private object $object;
    private array $result;

    public function __construct(){
        $this->object=new Fabryka();

    }

    public function meatRedMeat():array{
        echo "Meat :<br>";
        $this->result=$this->object->getData(DbQueries::RED_MEAT);
        $this->echoResult();
        return $output=$this->result;
    }
    public function meatCuredMeat():array{
        echo "Cured meat :<br>";
        $this->result=$this->object->getData(DbQueries::CURED_MEAT);
        $this->echoResult();
        return $output=$this->result;
    }
    public function meatPork():array{
        echo "Pork :<br>";
        $this->result=$this->object->getData(DbQueries::PORK);
        $this->echoResult();
        return $output=$this->result;
    }
    public function meatPoultry():array{
        echo "Poultry :<br>";
        $this->result=$this->object->getData(DbQueries::POULTRY);
        $this->echoResult();
        return $output=$this->result;
    }
    public function meatMollusk():array{
        echo "Mollusk :<br>";
        $this->result=$this->object->getData(DbQueries::MOLLUSK);
        $this->echoResult();
        return $output=$this->result;
    }
    public function meatFish():array{
        echo "Fishes :<br>";
        $this->result=$this->object->getData(DbQueries::FISH);
        $this->echoResult();
        return $output=$this->result;
    }
    public function meatLobster():array{
        echo "Lobster & shellfish :<br>";
        $this->result=$this->object->getData(DbQueries::LOBSTER);
        $this->echoResult();
        return $output=$this->result;
    }
    public function dairySoftCheese():array{
        echo "Soft cheeses & cream :<br>";
        $this->result=$this->object->getData(DbQueries::SOFT_CHEESE);
        $this->echoResult();
        return $this->result;
    }
    public function dairyPungentCheese():array{
        echo "Pungent chesses :<br>";
        $this->result=$this->object->getData(DbQueries::PUNGENT_CHEESE);
        $this->echoResult();
        return $this->result;
    }
    public function dairyHardCheese():array{
        echo "Hard chesses :<br>";
        $this->result=$this->object->getData(DbQueries::HARD_CHEESE);
        $this->echoResult();
        return $this->result;
    }
    public function vegetableAlliums():array{
        echo "Alliums :<br>";
        $this->result=$this->object->getData(DbQueries::ALLIUMS);
        $this->echoResult();
        return $this->result;
    }
    public function vegetableGreen():array{
        echo "Green vegetables :<br>";
        $this->result=$this->object->getData(DbQueries::GREEN);
        $this->echoResult();
        return $this->result;
    }
    public function vegetableRootSquash():array{
        echo "Root vegetables & squash :<br>";
        $this->result=$this->object->getData(DbQueries::ROOT);
        $this->echoResult();
        return $this->result;
    }
    public function vegetableNightshades():array{
        echo "Nightshades :<br>";
        $this->result=$this->object->getData(DbQueries::NIGHTSHADES);
        $this->echoResult();
        return $this->result;
    }
    public function vegetableFunghi():array{
        echo "Funghi :<br>";
        $this->result=$this->object->getData(DbQueries::FUNGHI);
        $this->echoResult();
        return $this->result;
    }
    public function vegetableNuts():array{
        echo "Nuts & seeds :<br>";
        $this->result=$this->object->getData(DbQueries::NUTS);
        $this->echoResult();
        return $this->result;
    }
    public function vegetableBeans():array{
        echo "Beans & peas :<br>";
        $this->result=$this->object->getData(DbQueries::BEANS);
        $this->echoResult();
        return $this->result;
    }
    public function herbsBlackPepper():array{
        echo "Pepper :<br>";
        $this->result=$this->object->getData(DbQueries::BLACK_PEPPER);
        $this->echoResult();
        return $this->result;
    }
    public function herbsRedPepper():array{
        echo "Red peppers :<br>";
        $this->result=$this->object->getData(DbQueries::RED_PEPPER);
        $this->echoResult();
        return $this->result;
    }

    public function herbsHotSpicy():array{
        echo "Hot & spicy herbs :<br>";
        $this->result=$this->object->getData(DbQueries::HOT_SPICY);
        $this->echoResult();
        return $this->result;
    }

    public function herbsHerbs():array{
        echo "Herbs :<br>";
        $this->result=$this->object->getData(DbQueries::HERBS);
        $this->echoResult();
        return $this->result;
    }

    public function herbsBaking():array{
        echo "Baking spices :<br>";
        $this->result=$this->object->getData(DbQueries::BAKING);
        $this->echoResult();
        return $this->result;
    }

    public function herbsExotic():array{
        echo "Exotic & aromatic herbs :<br>";
        $this->result=$this->object->getData(DbQueries::EXOTIC);
        $this->echoResult();
        return $this->result;
    }
    public function starchWhiteStarches():array{
        echo "White starches :<br>";
        $this->result=$this->object->getData(DbQueries::WHITE_STARCHES);
        $this->echoResult();
        return $this->result;
    }
    public function starchPotato():array{
        echo "Potatoes :<br>";
        $this->result=$this->object->getData(DbQueries::POTATO);
        $this->echoResult();
        return $this->result;
    }
    public function starchWholeWheat():array{
        echo "Whole wheat grains :<br>";
        $this->result=$this->object->getData(DbQueries::WHOLE_WHEAT);
        $this->echoResult();
        return $this->result;
    }
    public function starchSweetVege():array{
        echo "Sweet starchy vegetables :<br>";
        $this->result=$this->object->getData(DbQueries::SWEET_STARCHY_VEGE);
        $this->echoResult();
        return $this->result;
    }
    public function sweetFruit():array{
        echo "Fruits and berries :<br>";
        $this->result=$this->object->getData(DbQueries::SWEET_FRUIT);
        $this->echoResult();
        return $this->result;
    }
    public function sweetVanilla():array{
        echo "Fruits and berries :<br>";
        $this->result=$this->object->getData(DbQueries::SWEET_VANILLA);
        $this->echoResult();
        return $this->result;
    }
    public function sweetChocolate():array{
        echo "Fruits and berries :<br>";
        $this->result=$this->object->getData(DbQueries::SWEET_CHOCOLATE);
        $this->echoResult();
        return $this->result;
    }



    private function echoResult():void
    {
        foreach ($this->result as $row) {
            foreach ($row as $item){

            echo "<a href=''>".$item."</a>";
            echo "<br>";

        }
        }
    }
}