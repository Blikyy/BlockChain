<?php
class Chain{

    private array $data;

    public function __construct(){
        $this->data = [];
    }
    public function getChain(): array {
        return $this->data;
    }
    public function getLastBlock(): ?Block {
        if (empty($this->data)) {
            return null;
        }
        return $this->data[count($this->data) - 1];
    }
    
    public function addBlock(Block $block){
        $block->setID(count($this->data));
        $newhash = $block->generateHash($this->getLastBlock() instanceof Block ? $this->getLastBlock()->getHash() : "");
        $block->setHash($newhash);
        $this->data[] = $block;
    }
    public function isValid(Block $block): bool {
        $curBlokckIndex = $block->getID();
        if ($curBlokckIndex === 0) {
            return true;
        }
        if ($curBlokckIndex > count($this->data) || $curBlokckIndex < 1) {
            return false;
        }
        $previousBlock = $this->data[$curBlokckIndex - 1];
        $prevBlockhs = $previousBlock->getHash();
        if ($prevBlockhs !== $block->generateHash($prevBlockhs)) {
            return false;
        }
        return true;
    }
}

?>
