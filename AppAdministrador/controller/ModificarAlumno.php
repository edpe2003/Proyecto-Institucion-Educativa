<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/administrador.php';
error_reporting(0);
$administrador = new Administrador;

if ($_SESSION['IDPersona'] && isset($_POST['cambiarNombre'])) {
  $respuesta = $administrador->modificarDatosPersona($_POST['idPersona'], $_POST['nombre'], 'Nombre');
  if ($respuesta == null) {
    $_SESSION['idAlumno'] = $_POST['idPersona'];
    echo "<script> alert('Nombres iguales');
                location.href = '../gestionarUsuario.php';
                </script>";
  }else {
    $_SESSION['idAlumno'] = $_POST['idPersona'];
    echo "<script> alert('Cambios Guardados');
                location.href = '../gestionarUsuario.php';
                </script>";
  }
}else {
  if ($_SESSION['IDPersona'] && isset($_POST['cambiarSegundoNombre'])) {
    $respuesta = $administrador->modificarDatosPersona($_POST['idPersona'], $_POST['segundoNombre'], 'SegundoNombre');
    if ($respuesta == null) {
      $_SESSION['idAlumno'] = $_POST['idPersona'];
      echo "<script> alert('Segundo Nombres iguales');
                  location.href = '../gestionarUsuario.php';
                  </script>";
    }else {
      $_SESSION['idAlumno'] = $_POST['idPersona'];
      echo "<script> alert('Cambios Guardados');
                  location.href = '../gestionarUsuario.php';
                  </script>";
    }
  }else {
    if ($_SESSION['IDPersona'] && isset($_POST['cambiarApellido'])) {
      $respuesta = $administrador->modificarDatosPersona($_POST['idPersona'], $_POST['apellido'], 'Apellido');
      if ($respuesta == null) {
        $_SESSION['idAlumno'] = $_POST['idPersona'];
        echo "<script> alert('Apellidos iguales');
                    location.href = '../gestionarUsuario.php';
                    </script>";
      }else {
        $_SESSION['idAlumno'] = $_POST['idPersona'];
        echo "<script> alert('Cambios Guardados');
                    location.href = '../gestionarUsuario.php';
                    </script>";
      }
    }else {
      if ($_SESSION['IDPersona'] && isset($_POST['cambiarSegundoApellido'])) {
        $respuesta = $administrador->modificarDatosPersona($_POST['idPersona'], $_POST['segundoApellido'], 'SegundoApellido');
        if ($respuesta == null) {
          $_SESSION['idAlumno'] = $_POST['idPersona'];
          echo "<script> alert('Segundo Apellidos iguales');
                      location.href = '../gestionarUsuario.php';
                      </script>";
        }else {
          $_SESSION['idAlumno'] = $_POST['idPersona'];
          echo "<script> alert('Cambios Guardados');
                      location.href = '../gestionarUsuario.php';
                      </script>";
        }
      }else {
        if ($_SESSION['IDPersona'] && isset($_POST['cambiarNickname'])) {
          $respuesta = $administrador->modificarDatosAlumno($_POST['idPersona'], $_POST['nickname'], 'Nickname');
          if ($respuesta == null) {
            $_SESSION['idAlumno'] = $_POST['idPersona'];
            echo "<script> alert('Nicknames iguales');
                        location.href = '../gestionarUsuario.php';
                        </script>";
          }else {
            $_SESSION['idAlumno'] = $_POST['idPersona'];
            echo "<script> alert('Cambios Guardados');
                        location.href = '../gestionarUsuario.php';
                        </script>";
          }
        }else {
          if ($_SESSION['IDPersona'] && isset($_POST['cambiarCorreo'])) {
            $respuesta = $administrador->modificarDatosPersona($_POST['idPersona'], $_POST['correo'], 'correo');
            if ($respuesta == null) {
              $_SESSION['idAlumno'] = $_POST['idPersona'];
              echo "<script> alert('Correo ya utilizado por otra persona');
                          location.href = '../gestionarUsuario.php';
                          </script>";
            }else {
              $_SESSION['idAlumno'] = $_POST['idPersona'];
              echo "<script> alert('Cambios Guardados');
                          location.href = '../gestionarUsuario.php';
                          </script>";
            }
          }
        }
      }
    }
  }
}
?>