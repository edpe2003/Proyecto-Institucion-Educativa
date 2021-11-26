<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/consulta.php';


if (isset($_POST['crearConsulta'])) {
  $consulta = new Consulta;
  $consulta->setAsunto($_POST['asunto']);
  $consulta->setPregunta($_POST['contenido']);
  $consulta->setPara($_POST['correo']);
  $consulta->setIDAlumno($_SESSION['IDPersona']);
  $consulta->setEstado('Enviado');
  $consulta->setFechaHora(date("Y-m-d H:i:s"));
  $resultado = null;
  $resultado = $consulta->generarConsultaAlumno();
  if($resultado!=null){
  echo "<script>
  location.href = '../consultas.php';
  </script>";
  }else{
    echo "<script> alert('Ese docente no existe');
  location.href = '../consultas.php';
  </script>";
  }
}else {
  echo "<script>
    location.href = '../register.php';
    </script>";
}

?>