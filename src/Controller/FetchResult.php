<?php
declare(strict_types=1);


namespace KubaEnd\Controller;


use Exception;
use KubaEnd\Model\Interfaces\WineInterface;
use KubaEnd\Model\UniversalConnect;
use PDO;

class FetchResult extends EchoType implements WineInterface
{

    public string $query;
    private object $hookup;
    private $result;
    public $type;

    public function __construct(){
        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }


    }
    public function getWine($queryWine)
    {

        $sql=EchoType::getType();
        $stmt = $this->hookup->prepare($sql);
        $stmt->bindValue(':wine', $queryWine);
        $stmt->execute();
        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->echoResult();
    }
    private function echoResult()
    {
        foreach ($this->result as $row) {
            $this->type=($row['strain']);
//            echo $this->type;?>
                <form action="../../end.php" method="post">
                    <input type="submit" name="<?php echo $this->type?>" value='<?php echo $this->type?>'>
                    </form>
           <?php echo '<br><br>';

        }
    }
}
