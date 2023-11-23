<?php

    class Conexao{
        //atributos privados
        private $host = '127.0.0.1';
        private $dbname = 'db_sismecom';
        private $user = 'root';
        private $pass = '';


        //método público + objeto
        public function conectar(){
            try{
                $obj_mysqli = new mysqli("127.0.0.1", "root", "", "db_sismecom");
                if ($obj_mysqli->connect_errno)
        {
            echo "Ocorreu um erro na conexão com o banco de dados.";
            exit;
        }
            mysqli_set_charset($obj_mysqli, 'utf8');
                $conexao = $obj_mysqli;

                return $conexao; //retorna o objeto conexão

            } catch(PDOException $e){
                echo '<p>'.$e->getMessage().'</p>';
            }
        }
    }
?>
