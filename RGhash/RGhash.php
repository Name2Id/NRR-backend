<?php

    class unico {

        private string $hash = '';
        private string $className = '';

        public function crear_hash (string $nombre_de_la_clase) {
            $this->hash = hash('md5',$nombre_de_la_clase);
            $this->className = $nombre_de_la_clase;
        }

        public function imprime_hash () {
            if (!empty($this->hash)) {
                echo "hash de la clase '".$this->className . "' = ".$this->hash;
            } else {
                echo "ERROR 404 - Utiliza crear_hash para imprimir el hash.";
            }
        }

        public function obtener_hash () {
            return $this->hash;
        }

    }

    class variable extends unico {

        private int $diferenciador = -1;

        public function __construct () {
            $this->diferenciador += 1;
        }
        
        public function imprime_valor_actual () {
            echo "(valor)\$diferenciador = ".$this->diferenciador;
        }

        public function imprime_hash_actual () {
            echo "hash generado por el valor ".$this->diferenciador." = ".
            hash('sha256',$this->diferenciador);
        }

        public function obtener_valor_actual () {
            return $this->diferenciador;
        }

        public function obtener_hash_actual () {
            return hash('sha256',$this->diferenciador);
        }

        public function salto_de_linea () {
            echo "<br/>";
        }

        public function suma_uno () {
            $this->diferenciador += 1;
        }

        public function resta_uno () {
            if ($this->diferenciador > 0) {
                $this->diferenciador -= 1;
            } else {
                echo "Error el valor ha alcanzado el limite.";
            }
        }
        
    }

    class RGhash extends variable {

        public function conectate_a_esta_base_de_datos ($server,$user,$password,$database,$port) {
            $conexion = new mysqli (
                $server,$user,$password,$database,$port
            );
            if ($conexion->connect_errno) {
                return "algo salio mal con la conexion !.";
            } else {
                return "conectado."; 
            }
        }

    }

    class piezas4websites extends RGhash {

        public function html_ ($title,$meta = [],$lang = 'en') {
            $parteDeltop = [
                '<!DOCTYPE html>
                <html lang="'.$lang.'">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
                        implode("",$meta).'
                        <title>'.$title.'</title>
                    </head>
                    <body>'
            ];
            return implode("",$parteDeltop);
        }

        public function _html () {
            $parteDelbottom = [
                    '</body>
                </html>'
            ];
            return implode("",$parteDelbottom);
        }

    }

    class Name2Id extends piezas4websites {

    }

    class ramiroSbackN extends Name2Id {
        public function conectate_con_pdo_a ($server,$database,$user,$password) {

            try {

            } catch (PDOException $exception) {

            }
 
        }
    }

    class rsbn extends ramiroSbackN {

    }

    class n2d extends rsbn {

    }

?>
