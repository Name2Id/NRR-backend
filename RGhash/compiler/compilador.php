<?php
    require_once ('./RGhash/compiler/playwithit.php');
    
    function compilar ($title,array $content = [],$meta = [],$lang = 'en') {

        enciende_te ($title,$content,$meta,$lang);

    }

    function imprime ($title,array $content = [],$meta = [],$lang = 'en') {


        compilar ($title,$content,$meta,$lang);

    }

?>