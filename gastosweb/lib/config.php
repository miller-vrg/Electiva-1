<?php
//require_once $_SERVER['DOCUMEN_ROOT']. "/gastosweb/lib/php-activerecord/ActiveRecord.php";

require_once "php-activerecord/ActiveRecord.php";

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory('../modelo');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:root@localhost/finanzas_electiva',
       //'test' => 'mysql://root:root@localhost/finanzas_electiva',
       //'production' => 'mysql://root:root@localhost/finanzas_electiva'
     )
   );
});