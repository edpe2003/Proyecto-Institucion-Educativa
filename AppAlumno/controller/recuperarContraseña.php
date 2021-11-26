<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require "../../LogicaConexion/model/conexion.php";
require "../../LogicaConexion/model/persona.php";
require "../../LogicaConexion/model/PHPMailer/src/Exception.php";
require "../../LogicaConexion/model/PHPMailer/src/PHPMailer.php";
require "../../LogicaConexion/model/PHPMailer/src/SMTP.php";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$persona = new Persona;

if (isset($_POST["confirmar"])) {
    $correo = $_POST["Correo"];
    $persona->setCorreo($correo);
    $persona->setCi($_POST["CI"]);
    $datosPersona = $persona->verificarCorreoCI();
    if ($datosPersona) {
        $codigo = $persona->solicitarReiniciarContraseña();
	try {

	    // Si se rompe  a la mierda: https://know.mailsbestfriend.com/smtp_error_password_command_failed_5345714-1194946499.shtml
	    //$mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS';
	    //$mail->Port       = 587;
	    //Server settings
            $mail->SMTPDebug = 0;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'grupocuatro.be@gmail.com';             //SMTP username
            $mail->Password   = 'grupocuatro4';                         //SMTP password
            $mail->CharSet    = 'UTF-8';
	    $mail->Encoding   = 'base64';
            $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_SMTPS';            //Enable implicit TLS encryption
            $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('grupocuatro.be@gmail.com', 'Dovah Systems');
            $mail->addAddress("$correo", $datosPersona[0]['Nombre'] . ' ' . $datosPersona[0]['Apellido']);     //Add a recipient

            //Content
            $url = "http://localhost:8080/AppAlumno/ReiniciarContraseña.php?code=$codigo";
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Cambiar contraseña en MyQ';
            $mail->Body   = '<div class="col" style="margin:auto; text-align:center; widht: 500px;"><div style="background-color: blue; color: white; "><h1>MyQ Developer Team</h1></div><h3> Hola ' . $datosPersona[0]['Nombre'] . ' ' . $datosPersona[0]['Apellido']  . ', usted solicito un cambio de contraseña en la pagina MyQ, 
            <br>
            Si es usted el que quiere cambiar la contraseña
            <br>
            </h3>
            <h1>haga click <a href="' . $url . '">Aqui</a> para cambiar la contraseña</h1>
            <br>
            <h2> 
            <strong>  si usted no solicito este cambio, debe de iniciar sesion en nuestra pagina para cancelar la solicitud.</strong></h2></div>';

            $mail->send();
?>
            <div class="container text-center mt-5 bg-dark text-light p-3 rounded">
                <h1>MyQ</h1>
                <p><b>La solicitud de cambio de contraseña se envio correctamente, si no encuentras el correo fijate en la seccion de spam.</b></p>
                <button type="button" class="btn btn-primary"><a href="../">
                        <div class="text-light">Salir</div>
                    </a></button>
            </div>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
        } catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<script>
        alert('usuario no encontrado');
        location.href = '../index.php';
        </script>";
    }
} else {
    echo "<script>
    location.href = '../index.php';
    </script>";
}

?>
