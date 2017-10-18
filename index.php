<?php

function fiftyShades () {
    for ($i = 0; $i < 50; $i++){
        $kleur = $i;
        echo "<div style='background-color: rgb({$kleur},{$kleur},{$kleur}); width: 20px; height: 20px; border: 1px solid white;'></div><br>" , PHP_EOL;
    }
}
fiftyShades();

?>