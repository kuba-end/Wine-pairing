<?php
declare(strict_types=1);


namespace KubaEnd\Model;



use KubaEnd\Controller\RealFactory;
use KubaEnd\Model\Interfaces\MealInterface;
use Exception;
use KubaEnd\Model\Wines\CheninBlanc;


class SelectedWineQuery implements MealInterface
{
    public string $selectedWine;
    public object $hookup;
    public bool $sql;
    public array $result;
    public object $smth;
    public object $factory;

    public function __construct(){
        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * @param $smth | is a name of strain from PairFood
     * Fucking clue of all of it, but it won't fckin working and name of class
     * need to be hard typed
     *
     * I maked alternative way to making object trough the factory but its throw the same error
     * class not found...
     */
    public function selectedQuery($smth):void{
        //$this->selectedWine=$smth;  propably i dont need this line
       // $this->smth= $smth();    this wont work
        $this->smth= new CheninBlanc();
        $this->sql=$this->smth->query();

//        $this->smth=$smth;
//        $this->factory=new RealFactory();
//        $this->factory->selectedType($this->smth);
    }
    public function selectedQuery2($smth):void{
        //$this->selectedWine=$smth;
        $this->smth= new CheninBlanc();
        $this->sql=$this->smth->option();

//        $this->smth=$smth;
//        $this->factory= new RealFactory();
//        $this->sql=$this->factory->option();
    }
}