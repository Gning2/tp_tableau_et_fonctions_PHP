<?php

    function verificationPWD(String $a)
    {
        if(strlen($a)>=8)
        {
            return "true";
        }
        else
       { 
           return "false";
       }
    }
    echo verificationPWD("Amadou");
?>