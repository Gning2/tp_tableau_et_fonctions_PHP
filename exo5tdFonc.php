<?php
    function plusPetit(int $x, int $y, int $z)
    {
        return min([$x,$y,$z]);
    }
    echo plusPetit(6, 12, 45)
?>
