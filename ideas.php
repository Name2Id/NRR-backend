<?php


/* EJEMPLO DE USO COMO SI FUESE UN LENGUAJE DE PROGRAMACION.
     
        Lenguaje de programacion - actualmente solo reconoce una instruccion y esta pendiente programar en
        el compilador lo que sera la segunda instruccion.
        esta algo complicado escribir las instrucciones que compilaran este nuevo lenguaje asi que
        lo dejaremos para despues.
*/
        require_once ('./RGhash/compiler/compilador.php');

        $idea = 1;

        if ($idea == 1) {

            imprime (
                'RGhash',
                [
                    '<h2>WELCOME TO THE ramiroSbackN.</h2>',
                    "<div>
                    <h3>codigo para crear un hash md5 de la palabra 'ramiroSbackN' 
                    <br>
                    en este caso. pero la palabra 'ramiroSbackN' se puede reemplazar
                    <br>
                    por cualquier otra. dentro de una etiqueta html h2.</h3>
                    <pre>"."
                    \$test = [
                        '".htmlspecialchars('<h1>')."title test".
                        htmlspecialchars('</h1>')."',
                        'h2 new unico_hash(\"', ------> \$test[1]
                        'ramiroSbackN', -------------> \$test[2]
                        '\")', -----------------------> \$test[3]
                        '".htmlspecialchars('<h3>')."last item".
                        htmlspecialchars('</h3>')."'
                    ];"."
                    </pre>",
                    '<h3>HASH md5 : </h3>',
                    '<div>',
                    'h2 new unico_hash("',
                    'ramiroSbackN',
                    '")',
                    '</div>',
                    "<p>
                    Desde el indice 1 al indice 3 <br>
                    Cuenta como una sola sentencia.<br>
                    <a href='../frontend/'>go to the frontend</a>
                    </p>
                    </div>"
                ],
                [
                    '<link rel="shortcut icon" type="image/x-icon" href="./favicon/bw.ico">'
                ]
            );

        }
        
    /*
        La funcion imprime funciona como compilador y
        renderizador de los ressultados

    */