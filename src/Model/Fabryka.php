<?php
declare(strict_types=1);


namespace KubaEnd\Model;

use PDO;
use Exception;

class Fabryka
{
    public object $hookup;

    public function __construct(){
        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function getData($param):array{
        $sql=$param;
        $stmt = $this->hookup->prepare($sql);
        //$stmt->bindValue(':wine', $smth);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}