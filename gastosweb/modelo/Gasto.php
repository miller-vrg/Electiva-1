<?php
require_once "../lib/config.php";

class Gasto extends ActiveRecord\Model{
    public static $table_name = "gastos";
    // el gansto le pertenece a un usuario por eso belongs_to
    public static $belongs_to = array(
        array('Usuario')
    );
    
}