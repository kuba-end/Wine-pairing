<?php

namespace KubaEnd\Controller;

use KubaEnd\Model\SelectedWineQuery;
use KubaEnd\Model\UniversalConnect;

class PairFood
{
    /**
     * @var object Selected wine query object
     */
    private object $wine;
    /**
     * @var string Name of strain from _POST array
     */
    private string $try;
    /**
     * @var object db connnection
     */
    private object $hookup;

    /**
     * method which
     * extracting string from $_POST array
     * making db connection
     * and initializing selectedType method with binding object to $wine
     *
     * ---Maybe too much---
     */
    public function goodEnough():void
    {
        $this->try = implode("", $_POST);
        $this->hookup = UniversalConnect::doConnect();
        $this->selectedType($this->wine = new SelectedWineQuery());

    }

    /**
     * Twin method for additional food types
     * maked as a separate method for improving flexibility of using results
     */
    public function goodEnough2():void
    {
        $this->try = implode("", $_POST);
        $this->hookup = UniversalConnect::doConnect();
        $this->selectedType2($this->wine = new SelectedWineQuery());
    }

    /**
     * @param $wine SelectedWineQuery || name of strain which is nessesery to initialize selectedQuery method
     * from SelectedWineQuery class
     */
    private function selectedType($wine):void
    {
        $wine->selectedQuery($this->try);
    }

    /**
     * @param $wine SelectedWineQuery || twin method, similar solution as with goodEnough2 method
     */
    private function selectedType2($wine):void
    {
        $wine->selectedQuery2($this->try);
    }
}

