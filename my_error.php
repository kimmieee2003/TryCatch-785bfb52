<?php
function countDown() 
{
    $i = 12; 
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        if ($i == 0 && $i < 11) {
            return 'Er is iets goed gegaan';  
        } else return 'er is iets fout gegaan';
    } 
}

echo countDown();
?>