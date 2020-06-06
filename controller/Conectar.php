<?php


class Conectar
{
    private $DB_USER="root";
    private $DB_PASSWORD = "";
    private $DB_HOST = "localhost";
    private $DB_NAME = "lpv";

    public function conexion(){
        $dbconexion = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASSWORD, $this->DB_NAME);
        if ($dbconexion->connect_errno) {
            printf("No se pudo establecer la conexion con la base de datos: <br /> %s", $dbconexion->error);
            exit();
        }
        return $dbconexion;
    }

}

?>