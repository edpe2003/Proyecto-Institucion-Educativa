<?php
class Conexion extends PDO
{

   /*Genera la Conexion con la base de datos*/
   public function __CONSTRUCT()
   {
      try {
         $user = getenv('DB_USUARIO');
         $pass = getenv('DB_PASSWORD');
         $db = getenv('DB_NOMBRE');
         $host = getenv('DB_IP');
         $dsn = "mysql:host=" . $host . ";dbname=" . $db . ";charset=utf8";
         parent::__CONSTRUCT($dsn, $user, $pass);
      } catch (PDOException $e) {
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
   }
}
