<?php
// require("animal.php");
class frog extends animal
{
    function setLegs($legs) {
        $this->legs = $legs;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function jump()
    {
        echo "hop hop <br>";
    }
}

?>