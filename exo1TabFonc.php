<?php
    function dernierElement($tab)
    {
        
        if(!empty($tab)) 
            return $tab[count($tab)-1];
        else
            return "null";
       
    }
    echo dernierElement([12,34,4,97])
?>