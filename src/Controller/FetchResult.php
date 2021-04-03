<?php
declare(strict_types=1);


namespace KubaEnd\Controller;


use Exception;
use KubaEnd\Model\Interfaces\WineInterface;
use KubaEnd\Model\UniversalConnect;
use KubaEnd\Controller\Abstracts\EchoType;
use PDO;

class FetchResult extends EchoType implements WineInterface
{

    /**
     * @var object db connect
     */
    private object $hookup;
    /**
     * @var array all strains matched to selected settings
     */
    private array $result;
    /**
     * @var string a specific 'strain' from an array, needed for display strains as a separated results
     */
    public string $type;

    public function __construct(){
        try {
            $this->hookup = UniversalConnect::doConnect();
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function getWine($queryWine):void
    {
        /**
         * @var sql is SQL query which is set in EchoType::getType method which based on $_POST array
         */
        $sql=EchoType::getType();
        /**
         * To protect db from injections and some other atacks
         * we using preapre() and execute().
         */
        $stmt = $this->hookup->prepare($sql);
        $stmt->bindValue(':wine', $queryWine);
        $stmt->execute();
        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->echoResult();
    }

    /**
     * Simple method showing results as a selectable 'submits' tags
     */
    private function echoResult():void
    {
        foreach ($this->result as $row) {
            $this->type=($row['strain']);
            ?>
                <form action="../../end.php" method="post">
                    <input type="submit" name="<?php echo $this->type?>" value='<?php echo $this->type?>'>
                    </form>
           <?php echo '<br><br>';

        }
    }
}
