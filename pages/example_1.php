<?php

    require_once './RGhash/RGhash.php';
    require_once './RGhash/funcs.php';

    $piezas4websites = new piezas4websites;
    $links = new Name2Id;
    $img = new ramiroSbackN;
    $div = new rsbn;

    inicio($piezas4websites->html_(
        'Ramiro G. Glez.', # title - titulo del tab
        [ # meta tags y links para archivos externos css
            $links->addmetafile('styles','./css'),
            $links->addmetafile('bw','./favicon','shortcut icon','.ico','image/x-icon')
        ],
        'en' # para el lenguaje
    ));

        inicio($div->div_class('container'));
            inicio($div->div_class('centrar'));
                imp($img->img_alt('n2d','./img','imagen random','.png'));
            fin("div");
        fin("div");
        
        inicio($div->div_class('container'));
            inicio($div->div_class('centrar'));
                $conectar = new n2d;
                if($conectar->conectate_con_pdo_a('localhost','root','','test')) {
                    echo "conexion exitosa !.";
                }
            fin("div");
        fin("div");

        inicio($div->div_class('container'));
            inicio($div->div_class('centrar'));
                echo "
                <table>
                    <thead>
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>GITHUB USER</th>
                        <th>GITHUB URL</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                ";
            fin("div");
        fin("div");

    _fin($piezas4websites->_html());

?>