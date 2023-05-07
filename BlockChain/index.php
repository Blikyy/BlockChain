<?php

include 'Block.php';
include 'Chain.php';

$chain = new Chain();

$block1 = new Block("Halo");
$chain->addBlock($block1);

$isValid = $chain->isValid($block1);
if ($isValid) {
  echo "Block is valid";
} else {
  echo "Block is not valid";
}


?>