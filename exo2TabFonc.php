<?php
    function plusGrand($array) {
        
        if(empty($array)) 
            return "null";
        else 
            return max($array);
    }
       echo plusGrand([]);
?>