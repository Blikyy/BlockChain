# BlockChain

Tento repozitář obsahuje tři PHP soubory:

## block.php
Tento soubor obsahuje třídu `Block`, která reprezentuje blok v blockchainu. Třída `Block` má privátní vlastnosti `id`, `value` a `hash`. Obsahuje metody pro nastavení a získání vlastností `id`, `value` a `hash`, stejně jako metodu pro generování hash hodnoty bloku.

## chain.php
Tento soubor obsahuje třídu `Chain`, která reprezentuje blockchain. Třída `Chain` má privátní vlastnost `data`, která je polem. Obsahuje metody pro získání řetězce blockchainu, posledního bloku a přidání nového bloku do řetězce. Také obsahuje metodu pro ověření, zda je blok platný.

## index.php
Tento soubor vytváří instanci třídy `Chain`, vytváří instanci `Block` a přidává blok do blockchainu. Poté ověřuje, zda je blok platný.

## UML

![alt text](https://github.com/Blikyy/BlockChain/blob/main/UML.drawio.png)
