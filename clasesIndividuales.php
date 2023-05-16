<?php

    $idea = 1;

    if ($idea == 1) {

        $p4ws = new piezas4websites;

        echo $p4ws->html_('RGhash - Clases Individuales',[
            '<link rel="preconnect" href="https://fonts.googleapis.com">',
            '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>',
            '<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" 
            rel="stylesheet">',
            '<link rel="stylesheet" href="./css/bootstrap.css">',
            '<link rel="stylesheet" href="./css/styles.css">',
            '<link rel="stylesheet" href="./css/banner.css">',
            '<link rel="stylesheet" href="./css/keyframes.css">',
            '<link rel="stylesheet" href="./css/aos.css">'
        ]);
?>

<h2>YOU ARE USING ALL THE INDIVIAL CLASSES ONE BY ONE</h2>

<div class="rSbN_banner_bottom" data-aos="fade-up">

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <div>
                    <h3>
                        codigo para crear un hash md5 de la palabra 'ramiroSbackN' 
                        <br>
                        en este caso. pero la palabra 'ramiroSbackN' se puede reemplazar
                        <br>
                        por cualquier otra. dentro de una etiqueta html h2.
                    </h3>
                </div>

                <pre>
                    <?php
                        echo "
                        \$test = [
                            '".htmlspecialchars('<h1>')."title test".
                            htmlspecialchars('</h1>')."',
                            'h2 new unico_hash(\"', ------> \$test[1]
                            'ramiroSbackN', -------------> \$test[2]
                            '\")', -----------------------> \$test[3]
                            '".htmlspecialchars('<h3>')."last item".
                            htmlspecialchars('</h3>')."'
                        ];";
                    ?>
                </pre>

            </div>

            <div class="col-md-8">

                <h3>HASH md5 : </h3>

                <div>
                    <h2>
                        <?php
                            $u = new unico;
                            $u->crear_hash('ramiroSbackN');
                            echo $u->obtener_hash();
                        ?>
                    </h2>
                </div>

                <p>
                    Desde el indice 1 al indice 3 <br>
                    Cuenta como una sola sentencia.<br>
                    <h2>WELCOME TO THE ramiroSbackN.</h2>
                </p>

            </div>

        </div>

    </div>

</div>

<script src="https://kit.fontawesome.com/51765d8f2a.js" crossorigin="anonymous"></script>
<script src="./js/jq.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/aos.js"></script>
<script src="./js/index.js"></script>

<?php
        echo $p4ws->_html();
        
    }
?>