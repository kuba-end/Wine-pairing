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
    public string $selectedStrainName;
    /**
     * @var object db connnection
     */
    private object $hookup;

    /**
     * method which
     * extracting string from $_POST array
     * making db connection
     * and initializing selectedStrain method with binding object to $wine
     *
     * ---Maybe too much---
     */
    public function implodeStrain():void
    {
        $this->selectedStrainName = implode("", $_POST);
        $this->hookup = UniversalConnect::doConnect();
        $this->selectedStrain($this->wine = new SelectedWineQuery());

    }

    /**
     * Twin method for additional food types
     * maked as a separate method for improving flexibility of using results
     */
    public function implodeStrain2():void
    {
        $this->selectedStrainName = implode("", $_POST);
        $this->hookup = UniversalConnect::doConnect();
        $this->selectedStrain2($this->wine = new SelectedWineQuery());
    }

    /**
     * @param $wine SelectedWineQuery || name of strain which is nessesery to initialize setFqn method
     * from SelectedWineQuery class
     */
    private function selectedStrain($wine):void
    {
        $wine->setFqn($this->selectedStrainName);
    }

    /**
     * @param $wine SelectedWineQuery || twin method, similar solution as with implodeStrain2 method
     */
    private function selectedStrain2($wine):void
    {
        $wine->setFqn2($this->selectedStrainName);
    }

    /**
     * @return string
     */
    public function getTry(): string
    {
        return implode("", $_POST);
    }
}

