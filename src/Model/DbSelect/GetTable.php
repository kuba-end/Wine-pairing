<?php


namespace KubaEnd\Model\DbSelect;


use Exception;
use KubaEnd\Model\UniversalConnect;
use PDO;

class GetTable
{
    const RED='red';
    const WHITE='white';

    public string $sql;
    public string $type;
    public object $hookup;
    public array $result;

    public function __construct(){

        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function getWines($param){
        $this->query($param);
    }
    public function query($param){
        $this->sql = sprintf("select strain from %s where pairing.wine_strains.color = '$param'","wine_strains");
        $stmt = $this->hookup->prepare($this->sql);
        $stmt->execute();
        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->echoResult();
    }
    private function echoResult():void
    {
        foreach ($this->result as $row) {
            $this->type=($row['strain']);
            echo $this->type.'<br>';

        }
    }
}

