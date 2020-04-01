<?php

function countDown() {
    $i = 0; 
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        if($i == 0 && $i < 11){
            return 'Er is iets fout gegaan';  
        }
       
    } 
}

echo countDown();
?>