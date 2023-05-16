<?php


/* EJEMPLO DE USO COMO SI FUESE UN LENGUAJE DE PROGRAMACION.
     
        Lenguaje de programacion - actualmente solo reconoce una instruccion y esta pendiente programar en
        el compilador lo que sera la segunda instruccion.
        esta algo complicado escribir las instrucciones que compilaran este nuevo lenguaje asi que
        lo dejaremos para despues.

        Descomentar el require en caso de que el index no funcione
*/
        #require_once ('./RGhash/compiler/compilador.php');

        $idea = 1;

        if ($idea == 1) {

            imprime (
                'RGhash - Clases Empaquetadas',
                [
                    '<h2 class="rSbN_links_animation">YOU ARE USING THE ALL IN ONE PAQUETE OF CLASSES</h2>',
                    "<div class='rSbN_banner' data-aos=\"fade-up\">
                    <div class='rSbN_sombra row'>
                    <div class='col-md-6'>
                    <h3>codigo para crear un hash md5 de la palabra 'ramiroSbackN' 
                    <br>
                    en este caso. pero la palabra 'ramiroSbackN' se puede reemplazar
                    <br>
                    por cualquier otra. dentro de una etiqueta html h2.</h3>
                    <div class='rSbN_links'>
                    <pre class='rSbN_links_animation_delay1'>"."
                    \$test = [
                        '".htmlspecialchars('<h1>')."title test".
                        htmlspecialchars('</h1>')."',
                        'h2 new unico_hash(\"', ------> \$test[1]
                        'ramiroSbackN', -------------> \$test[2]
                        '\")', -----------------------> \$test[3]
                        '".htmlspecialchars('<h3>')."last item".
                        htmlspecialchars('</h3>')."'
                    ];"."
                    </pre>
                    </div>
                    </div>
                    <div class='col-md-6'>",
                    '<h3>HASH md5 : </h3>',
                    '<div>',
                    'h2 new unico_hash("',
                    'ramiroSbackN',
                    '")',
                    '</div>',
                    "<p>
                    Desde el indice 1 al indice 3 <br>
                    Cuenta como una sola sentencia.<br>
                    <h2 class='rSbN_links_animation_delay2'>WELCOME TO THE ramiroSbackN.</h2>
                    </p>
                    </div>
                    </div>
                    </div>",
                    '<script src="https://kit.fontawesome.com/51765d8f2a.js" crossorigin="anonymous"></script>',
                    '<script src="./js/jq.js"></script>',
                    '<script src="./js/bootstrap.min.js"></script>',
                    '<script src="./js/aos.js"></script>',
                    '<script src="./js/index.js"></script>'
                ],
                [
                    '<link rel="shortcut icon" type="image/x-icon" href="./favicon/bw.ico">',
                    '<link rel="preconnect" href="https://fonts.googleapis.com">',
                    '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>',
                    '<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" 
                    rel="stylesheet">',
                    '<link rel="stylesheet" href="./css/bootstrap.css">',
                    '<link rel="stylesheet" href="./css/styles.css">',
                    '<link rel="stylesheet" href="./css/banner.css">',
                    '<link rel="stylesheet" href="./css/keyframes.css">',
                    '<link rel="stylesheet" href="./css/aos.css">'
                ]
            );

        }
        
    /*
        La funcion imprime funciona como compilador y
        renderizador de los ressultados

    */