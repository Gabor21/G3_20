<?php
    class Conectar
    {
        Protected $dbh;
        Protected function conexion()
        {
            try
            {
                $conectar = $this->dbh = new PDO("mysql:host=34.68.196.220;dbname=g3_20","G3_20","tfc4C852");
                return $conectar;
            }
            catch(Exception $e)
            {
                print "error BD" .$e->getmessage(). "<br/>";
                die();

            }

        }
        public function set_names()
        {
            return $this->bdh->query("SET NAMES 'utf8'");
        }

    }   



?>
