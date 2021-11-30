<?php
   function verificationPWD($string) {
    if(
    strlen($string) >= 8 &&
    preg_match("#[0-9].*#",$string) &&
    preg_match("#[a-z].*#",$string) &&
    preg_match("#[A-Z].*#",$string)
    ) return "true";
    else
    {
        return "false";
    }
    }
    echo verificationPWD("Amadou1Z");
?>