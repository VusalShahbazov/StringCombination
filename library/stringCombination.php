<?php

namespace stringCombination\library;

use stringCombination\schema\stringCombinationInterface;


class stringCombination implements stringCombinationInterface
{
	protected $iterationNumber = 0;

	protected $charsLenght = 10;

// $this->charsLenght


	protected $inputChars = [
		'a','c','b','z','y',
		'x','w','v','u','t',
		's','r','q','p','o',
		'n','m','l','k','j',
		'i','h','g','f','e',
		'd'];

	public function setChars(array $arr)
	{
		$this->inputChars =  $arr;
	}

   
    public function addChars(array $arr){
    	$this->inputChars = array_merge($this->inputChars ,$arr);
    }

    public function addChar($var){
     	$this->inputChars[] = $var;
    }


    public function removeChars(array $arr){
    	$this->inputChars = array_diff($this->inputChars, $arr);
    }

    public function removeChar($var){
    	if (array_search($this->inputChars, $var)) {
	    	$this->inputChars = array_diff($this->inputChars, [$arr]);
    	}
    }

    public function getInputChars(){
    	return $this->inputChars;
    }

    public function setStringLenght(int $var)
    {
    	$this->charsLenght = $var;
    }


    public function getStringLenght()
    {
    	return $this->charsLenght;
    }

    public function getString()
    {

        $len = count($this->inputChars);
        // $num =  0;$this->iterationNumber

        while (true) {
            $ostatok = $this->iterationNumber%$len;
            $celoye = intval($this->iterationNumber/$len);
            $result = '';
            $args = [ $ostatok , $celoye ];
            if ($celoye>0) {
                while(true) {
                    $count = count($args);
                    $temp = intval(($args[$count-1]-1)/$len);
                    if ($temp>0) {
                        $args[] = $temp;
                        continue;
                    }else{
                        $result=$this->inputChars[$args[$count-1]-1];
                        $tmp = 1;
                        for ($i = $count -2 ; $i >= 1 ; $i--) {
                            $result .= $this->inputChars[($args[$i]-1)%$len];
                            $tmp++;
                        }
                        $tmp++;
                        if ($tmp > $this->charsLenght) {
                            return false;
                        }

                        $result .= $this->inputChars[$args[0]];
                        break;
                    }
                }
            }else{
                $result = $this->inputChars[$ostatok];
            }

            $this->iterationNumber++;
            return $result;
            
        }

    }

    public function resultString()
    {
        return $this->getString();
    }



}
