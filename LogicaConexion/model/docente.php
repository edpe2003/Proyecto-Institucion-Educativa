<?php
class Docente extends Persona
{
  private $diasDisponibles;
  private $horaInicio;
  private $horaFinalizacion;

  /*Inserta en las tablas "Persona y Docente" los datos de 1 Docente*/
  public function insertarDocente($persona)
  {
    $con = new Conexion;
    $id = $persona->insertarPersona();

    if ($id != null) {
      $sql = "INSERT INTO Docente(IDPersona) VALUES ('$id')";
      $con->query($sql);
      return 1;
    } else {
      return 0;
    }
  }

  /*Verifica que los datos ingresados en el login de Docente sean correctos y existentes*/
  public function validarDocente()
  {
    $con = new Conexion();
    $sql = "SELECT p.IDPersona FROM Persona p, Docente d WHERE p.IDPersona = d.IDPersona AND correo=? AND p.estado=1";
    $query = $con->prepare($sql);
    $query->execute([
      parent::getCorreo()
    ]);
    $query = $query->fetchAll();
    if ($query) {
      $IDDocente = $query[0]["IDPersona"];
      $sql = "SELECT IDGrupo FROM Persona_Grupo WHERE IDPersona = ?";
      $query = $con->prepare($sql);
      $query->execute([
        $IDDocente
      ]);
      $query = $query->fetchAll();
      if ($query != null) {
        $sql = "SELECT p.contrasena, p.IDPersona FROM Persona p, Docente d WHERE p.correo=? and p.Estado=1 and p.IDPersona = d.IDPersona";
        $query = $con->prepare($sql);
        $query->execute([
          parent::getCorreo()
        ]);
        $query = $query->fetchAll();
        $this->setId($query[0]["IDPersona"]);
        return $query[0]["contrasena"];
      } else {
        return null;
      }
    } else {
      return null;
    }
  }

  /*Selecciona y retorna la contraseña de 1 Docente*/
  public function devolverContraseñaDocente()
  {
    $con = new Conexion();
    $sql = "SELECT p.contrasena, p.IDPersona FROM Persona p, Docente d WHERE p.IDPersona=? and p.Estado=1 and p.IDPersona = d.IDPersona";
    $query = $con->prepare($sql);
    $query->execute([
      parent::getId()
    ]);
    $query = $query->fetchAll();
    if ($query != null) {
      return $query[0]["contrasena"];
    } else {
      return null;
    }
  }

  /*Hashea y actualiza la contraseña de un docente en la tabla "Persona"*/
  public function ModificarContraseñaDocente()
  {
    parent::setContraseña(password_hash(parent::getContraseña(), PASSWORD_BCRYPT));
    $con = new Conexion();
    $sql = "UPDATE Persona SET contrasena = ? WHERE IDPersona= ?;";
    $query = $con->prepare($sql);
    $query->execute([
      parent::getContraseña(), parent::getId()
    ]);
  }

  /*Actualiza el atributo "DiasDisponibles" de un Docente en la tabla "Docente"*/
  public function ModificarDiasDisponibles()
  {
    $con = new Conexion();
    $Dias = $this->getDiasDisponibles();
    for ($i = 0; $i < count($Dias); $i++) {
      if ($Dias[0] == '1') {
        $DiasDisponibles = 'Lunes';
      } else {
        $DiasDisponibles = ' ';
      }
      if ($Dias[1] == '2') {
        $DiasDisponibles = "$DiasDisponibles Martes";
      }
      if ($Dias[2] == '3') {
        $DiasDisponibles = "$DiasDisponibles Miercoles";
      }
      if ($Dias[3] == '4') {
        $DiasDisponibles = "$DiasDisponibles Jueves";
      }
      if ($Dias[4] == '5') {
        $DiasDisponibles = "$DiasDisponibles Viernes";
      }
    }
    $sql = "UPDATE Docente SET DiasDisponibles = '$DiasDisponibles' WHERE IDPersona = ?;";
    $query = $con->prepare($sql);
    $query->execute([
      parent::getId()
    ]);
  }

  /*Actualiza los atributos "HoraInicio y HoraFinalizacion" de un Docente en la tabla "Docente"*/
  public function ModificarHorariosDisponibles()
  {
    $con = new Conexion();
    $sql = "UPDATE Docente SET HoraInicio  = ?, HoraFinalizacion = ? WHERE IDPersona = ?;";
    $query = $con->prepare($sql);
    $query->execute([
      $this->getHoraInicio(), $this->getHoraFinalizacion(), parent::getId()
    ]);
  }

  /*Selecciona los datos de 1 Docente para la seccion de Modificar Perfil*/
  public function VerDatosDocente()
  {
    $con = new Conexion;
    $VerPersona = "SELECT * FROM Persona WHERE IDPersona =" . parent::getId();
    $VerDocente = "SELECT * FROM Docente WHERE IDPersona =" . parent::getId();
    foreach ($con->query($VerDocente) as $row) {
      $this->diasDisponibles = $row['DiasDisponibles'];
      $this->horaInicio = $row['HoraInicio'];
      $this->horaFinalizacion = $row['HoraFinalizacion'];
    }
    foreach ($con->query($VerPersona) as $row) {
      $this->setAvatar($row['Avatar']);
      $this->setNombre($row['Nombre']);
      $this->setSegundoNombre($row['SegundoNombre']);
      $this->setApellido($row['Apellido']);
      $this->setSegundoApellido($row['SegundoApellido']);
      $this->setCi($row['CI']);
      $this->setCorreo($row['correo']);
    }
  }

  public function getDiasDisponibles()
  {
    return $this->diasDisponibles;
  }

  public function getHoraInicio()
  {
    return $this->horaInicio;
  }

  public function getHoraFinalizacion()
  {
    return $this->horaFinalizacion;
  }

  public function setDiasDisponibles($diasDisponibles): self
  {
    $this->diasDisponibles = $diasDisponibles;

    return $this;
  }

  public function setHoraInicio($horaInicio): self
  {
    $this->horaInicio = $horaInicio;

    return $this;
  }

  public function setHoraFinalizacion($horaFinalizacion): self
  {
    $this->horaFinalizacion = $horaFinalizacion;

    return $this;
  }

  public function activarConexion($IDPersona)
  {
    $fecha = date("Y-m-d H:i:s");
    $con = new Conexion();
    $sql = "UPDATE Persona
        SET Conexion = 1 
        WHERE IDPersona = ?";
    $query = $con->prepare($sql);
    $query->execute([
      $IDPersona
    ]);

    $sql = "INSERT INTO Registro_Conexion VALUES(?,?,?,?)";
    $query = $con->prepare($sql);
    $query->execute([
      $IDPersona, date("Y-m-d H:i:s", strtotime('-3 hours', strtotime($fecha))), 1, 0
    ]);
  }

  public function desactivarConexion($IDPersona)
  {
    $fecha = date("Y-m-d H:i:s");
    $con = new Conexion();
    $sql = "UPDATE Persona
        SET Conexion = 0 
        WHERE IDPersona = ?";
    $query = $con->prepare($sql);
    $query->execute([
      $IDPersona
    ]);

    $sql = "INSERT INTO Registro_Conexion VALUES(?,?,?,?)";
    $query = $con->prepare($sql);
    $query->execute([
      $IDPersona, date("Y-m-d H:i:s", strtotime('-3 hours', strtotime($fecha))), 0, 1
    ]);
  }
}
