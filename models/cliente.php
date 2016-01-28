<?php
require_once "model.php";

class Transf extends Modelo
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_transf()
    {
        $result = $this->_db->query('SELECT * FROM miniapp');
        $users = $result->fetch_all(MYSQLI_ASSOC);
        
        return $users;
    }
    public function set_transf($dates)
    {
        $query = $this->_db->query("INSERT INTO `miniapp`(`id`, `usuario`, `clave`, `correo`, `nombre`, `apellido`, `cedula`,`producto`,`marca`)
                                            VALUES(
                                                NULL,
                                                '".$dates['usuario']."',
                                                '".$dates['clave']."',
                                                '".$dates['correo']."',
                                                '".$dates['nombre']."',
                                                '".$dates['apellido']."',
                                                '".$dates['cedula']."',
                                                '".$dates['producto']."',
                                                '".$dates['marca']."'
                                            )
        ");
        if($query === TRUE){
            echo "good";
        }else {
            echo "bad".$this->error;
        }
    }
}
?>