<?php
function palindromer($num) {

    if(is_int($num)){
        $newnum = $num + 1;
        while($newnum != strrev($newnum) || $newnum < $num){
            $newnum = $newnum + 1;
        }

        echo "The smallest greater palindrome of the number ".$num." is ".$newnum;


    }else{
        echo "The number you provided is not an integer. Please try again";
    }

}

function balance_parenthesis($str){
    $leftCounter = 0;
    $rightCounter = 0;
    $difference = 0;
    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == '('){
            $leftCounter = $leftCounter + 1;
        }
        if($str[$i] == ')'){
            $rightCounter = $rightCounter + 1;
        }

    }

    $difference = $leftCounter - $rightCounter;

    echo $str;
    echo "-------";
    if($difference < 0){
        for($i = 0; $i < abs($difference); $i++){
            $str = '('.$str;
        }
    }

    echo $str;
    echo "-------";
    if($difference > 0){
        for($i = 0; $i < abs($difference); $i++){
            $str = $str.')';

        }
    }

    echo $str;
    echo "-------";


}

function bc_dir( $fileList,  $searchString) {



}


balance_parenthesis('(Hello (I am (here))');

