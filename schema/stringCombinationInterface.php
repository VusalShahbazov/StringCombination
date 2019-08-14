<?php


namespace stringCombination\schema;

interface stringCombinationInterface {

	public function getString();

    public function setChars(array $arr);


    public function setStringLenght(int $var);
    public function getStringLenght();


   
    public function addChars(array $arr);

    public function addChar($var);


    public function removeChars(array $arr);

    public function removeChar($var);

    public function getInputChars();


}