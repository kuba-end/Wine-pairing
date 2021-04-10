<?php
declare(strict_types=1);


namespace KubaEnd\Model;



use KubaEnd\Model\Interfaces\MealInterface;
use Exception;


class SelectedWineQuery implements MealInterface
{
    public object $hookup;
    public $sql;
    public array $result;
    public object $smth;

    public function __construct()
    {
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
    public function selectedQuery($smth):void
    {

        $smth=str_replace(" ","",$smth);
        $fqn =  "KubaEnd\Model\Wines\\$smth";
        $this->smth= new $fqn;
        $this->sql=$this->smth->query();

    }
    public function selectedQuery2($smth):void
    {
        $smth=str_replace(" ","",$smth);
        $fqn =  "KubaEnd\Model\Wines\\$smth";
        $this->smth= new $fqn;
        $this->sql=$this->smth->option();
    }
}
