<?php

    require_once './RGhash/RGhash.php';

    $piezas4websites = new piezas4websites;
    $links = new Name2Id;

    echo $piezas4websites->html_(
        'Ramiro G. Glez.', # title - titulo del tab
        [ # meta tags y links para archivos externos css
            $links->addmetafile('styles','./css'),
            $links->addmetafile('bw','./favicon','shortcut icon','.ico','image/x-icon')
        ],
        'en' #para el lenguaje
    );

        //Escriba su codigo aqui

    echo $piezas4websites->_html();

?>