<?php
require_once "../lib/config.php";

class Usuario extends ActiveRecord\Model{

    public static $table_name = "usuarios";
    /// si la tabla su primari key es distinto de id
    public static $primary_key = "cedula";

    // un usuario tiene muchos gastos por eso has_many
    public static $has_many = array(
        array('gastos')
    );

}