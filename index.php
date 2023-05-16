<?php 

    $activar_compilador = false;

    if ($activar_compilador) {

        #require_once ('./RGhash/RGhash.php');
        /**
         * el backend (piezas4websites,Name2Id,etc. ...)
         * esta listo para urilizarce y nos da la 
         * ventaja de tener la livertad de 
         * utilizar sin restricciones o 
         * procesos intermedios todas sus clases.
         */
        require_once ('./RGhash/compiler/compilador.php');
        require_once './clasesEmpaquetadas.php';
        /**
         * Limitantes del compilador .
         * 1- es necesario escribir y crear sentencias especificas 
         * que pasen a travez de un proceso de vinculacion 
         * para poder utilizar las clases del backend
         * Usos Utilies
         * 1- puede utilizar la funcion imprime (el compilador)
         * como una especie de wrapper el cual le permite 
         * tener de arranque el template basico pre configurado
         * para poder agragar mas codigo html de una manera facil
         * y ordenada.
         */

    } else {

        require_once ('./RGhash/RGhash.php');
        require_once './clasesIndividuales.php';
        /**
         * el backend (piezas4websites,Name2Id,etc. ...)
         * esta listo para urilizarce y nos da la 
         * ventaja de tener la livertad de 
         * utilizar sin restricciones o 
         * procesos intermedios todas sus clases.
         */
        #require_once ('./RGhash/compiler/compilador.php');
        /**
         * Limitantes del compilador .
         * 1- es necesario escribir y crear sentencias especificas 
         * que pasen a travez de un proceso de vinculacion 
         * para poder utilizar las clases del backend
         * Usos Utilies
         * 1- puede utilizar la funcion imprime (el compilador)
         * como una especie de wrapper el cual le permite 
         * tener de arranque el template basico pre configurado
         * para poder agragar mas codigo html de una manera facil
         * y ordenada.
         */

    }

?>