 

<?php 
namespace Medoo;
require 'Medoo.php';

if(!isset($database)){
    $database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'db4free.net:3306',
        'database' => 'recetario',
        'username' => 'camila2022',
        'password' => 'rosado2022'
    ]);
}


   /* namespace Medoo;
    require 'Medoo.php';

    if(!isset($database)){
        $database = new Medoo([
            // [required]
            'type' => 'mysql',
            'host' => 'localhost',
            'database' => 'recetario',
            'username' => 'root',
            'password' => 'root'
        ]);
    }*/
?>


