<?php

#PROCESO DE COMPILACION (prdco)
function prdco (&$content,unico $instance) {

    for ($i = 0; $i < count($content); $i++) {
        if (
            $content[$i] === 'h2 new unico_hash("' &&
            $content[$i+2] === '")'
            ) {
                $content[$i] = "";
                $content[$i+2] = "";
                $instance->crear_hash($content[$i+1]);
                $content[$i+1] = '<h2>'.$instance->obtener_hash().'</h2>';
        } /*else if ( add more statements to compile ! here mtfk! =D ) {
            
             process the new statements here mtfk !!!!!! XD .
             
        } */
    }

}

function n2d ($title,array $content = [],$meta = [],$lang = 'en') {

    require_once './RGhash/RGhash.php';

    $n2d = new rsbn ();

    echo $n2d->html_($title,$meta,$lang);
    /**INICIO
         * PROCESO DE COMPILACION
         * V 1.0
         */

        prdco ($content,$n2d);
    //FIN.
    echo implode("",$content);
    echo $n2d->_html();

}

function rsbn ($title,array $content = [],$meta = [],$lang = 'en') {

    n2d ($title,$content,$meta,$lang);

}

function ramiroSbackN ($title,array $content = [],$meta = [],$lang = 'en') {

    rsbn ($title,$content,$meta,$lang);

}

function Name2Id ($title,array $content = [],$meta = [],$lang = 'en') {

    ramiroSbackN ($title,$content,$meta,$lang);

}

function piezas4websites ($title,array $content = [],$meta = [],$lang = 'en') {

    Name2Id ($title,$content,$meta,$lang);

}

function RGhash ($title,array $content = [],$meta = [],$lang = 'en') {

    piezas4websites ($title,$content,$meta,$lang);

}

function Variable ($title,array $content = [],$meta = [],$lang = 'en') {

    RGhash ($title,$content,$meta,$lang);

}

function unico ($title,array $content = [],$meta = [],$lang = 'en') {

    Variable ($title,$content,$meta,$lang);

}

function enciende_te ($title,array $content = [],$meta = [],$lang = 'en') {
    /**
     * rsbn
     * ramiroSbackN
     * Name2Id
     * piezas4websites
     * RGhash
     * Variable
     * unico
     */
    /*change me => n2d('hello world!.'); */

    try {
        n2d($title,$content,$meta,$lang);
    } catch (Exception $e) {
        try {
            rsbn($title,$content,$meta,$lang);
        } catch (Exception $e) {
            try {
                ramiroSbackN($title,$content,$meta,$lang);
            } catch (Exception $e) {
                try {
                    Name2Id($title,$content,$meta,$lang);
                } catch (Exception $e) {
                    try {
                        piezas4websites($title,$content,$meta,$lang);
                    } catch (Exception $e) {
                        try {
                            RGhash($title,$content,$meta,$lang);
                        } catch (Exception $e) {
                            try {
                                Variable($title,$content,$meta,$lang);
                            } catch (Exception $e) {
                                try {
                                    unico($title,$content,$meta,$lang);
                                } catch (Exception $e) {
                                    echo "Ocurrio un Error: ".$e;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}