<?php

class Block{
    private int $id;
    private string $value;
    private string $hash;

    function __construct($value){
        $this->value = $value;
    }
    function setID(int $id):static{
        $this->id = $id;
        return $this;
    }
    function getID():string{
        return $this->id;
    }
    function setValue(string $value):static{
        $this->value = $value;
        return $this;
    }
    function getValue():string{
        return $this->value;
    }
    function setHash(string $hash):static{
        $this->hash = $hash;
        return $this;
    }
    function getHash():string{
        return $this->hash;
    }
    public function generateHash(string $previousHash = ""): string{
        return hash("sha256", $this->id . '|' . $this->value . '|' . $previousHash);
    }
}

?>