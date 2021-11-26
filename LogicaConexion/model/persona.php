  <?php
  class Persona
  {
    private $id;
    private $ci;
    private $nombre;
    private $segundoNombre;
    private $apellido;
    private $segundoApellido;
    private $correo;
    private $contraseña;
    private $conexion;
    private $avatar;
    private $estado;
    private $grupo;
    private $nombreGrupo;
    private $fondoChat;
    private $codigo;

    /*Elimina las tublas de la tabla "ReiniciarContraseña" de 1 Persona*/
    public function borrarSolicitudContraseña()
    {
      $con = new Conexion;
      $sql = 'DELETE FROM ReiniciarContraseña WHERE correo = ?;';
      $query = $con->prepare($sql);
      $query->execute([
        $this->correo
      ]);
    }

    /*Hashea y actualiza la contraseña de 1 Persona en la tabla "Persona"*/
    public function cambiarContraseñaXcorreo()
    {
      $con = new Conexion;
      $hashPass = password_hash($this->contraseña, PASSWORD_BCRYPT);
      $sql = 'UPDATE Persona SET contrasena = ? WHERE correo = ?;';
      $query = $con->prepare($sql);
      $query->execute([
        $hashPass, $this->correo
      ]);

      $this->borrarSolicitudContraseña();
    }

    /*Comprueba que el codigo de la tabla "ReiniciarContraseña" sea igual al dado por el sistema para la seccion de  "Olvidaste tu Contraseña"*/
    public function comprobarCodigo()
    {
      $con = new Conexion;
      $sql = 'SELECT correo FROM ReiniciarContraseña WHERE codigo = ?';
      $query = $con->prepare($sql);
      $query->execute([
        $this->codigo
      ]);
      $query = $query->fetchAll();
      return $query[0]["correo"];
    }

    /*Inserta los datos necesarios en la tabla "ReiniciarContraseña" para iniciar el proceso*/
    public function solicitarReiniciarContraseña()
    {
      $con = new Conexion;
      $codigo = uniqid(true);
      $sql = 'SELECT codigo FROM ReiniciarContraseña WHERE codigo = (?)';
      $query = $con->prepare($sql);
      $query->execute([
        $codigo
      ]);

      $query = $query->fetchAll();

      if (!$query) {
        $sql = 'INSERT INTO ReiniciarContraseña (codigo, correo) VALUES (?, ?)';
        $query = $con->prepare($sql);
        $query->execute([
          $codigo, $this->correo
        ]);
        return $codigo;
      } else {
        $codigo = uniqid(true);
        $sql = 'INSERT INTO ReiniciarContraseña (codigo, correo) VALUES (?, ?)';
        $query = $con->prepare($sql);
        $query->execute([
          $codigo, $this->correo
        ]);
        return $codigo;
      }
    }

    /*Verifica que el correo y CI de 1 Persona sean veridicos y correctos*/
    public function verificarCorreoCI()
    {
      $con = new Conexion;
      $sql = 'SELECT IDPersona, Nombre, Apellido FROM Persona WHERE correo = ? and CI = ?;';
      $query = $con->prepare($sql);
      $query->execute([
        $this->correo, $this->ci
      ]);
      $query = $query->fetchAll();
      return $query;
    }

    /*Cambia el atributo "Estado" de la tabla "Persona"*/
    public function cambiarEstado()
    {
      $con = new Conexion;
      $sql = 'UPDATE Persona SET Estado = ? WHERE CI= ? and Correo = ?';
      $query = $con->prepare($sql);
      $query->execute([
        $this->estado, $this->ci, $this->correo
      ]);
    }

    /*Muestra el fondo del chat de 1 Persona*/
    public function mostrarFondoChat()
    {
      $con = new Conexion;
      $sql = 'SELECT FondoChat FROM Persona WHERE IDPersona = ?';
      $query = $con->prepare($sql);
      $query->execute([
        $this->id
      ]);
      $query = $query->fetchAll();
      return $query[0]["FondoChat"];
    }

    /*Ingresa los datos necesarios en la tabla "Persona"*/
    public function insertarPersona()
    {
      $con = new Conexion;
      $sql = 'SELECT * FROM Persona WHERE correo = ?';
      $query = $con->prepare($sql);
      $query->execute([
        $this->correo
      ]);
      $query = $query->fetchAll();
      if ($query != null) {
        return null;
      } else {
        $con = new Conexion;
        $sql = 'SELECT * FROM Persona WHERE CI = ?';
        $query = $con->prepare($sql);
        $query->execute([
          $this->ci
        ]);
        $query = $query->fetchAll();
        if ($query != null) {
          return null;
        } else {
          $sql = 'INSERT INTO Persona(CI, Nombre, SegundoNombre, Apellido, SegundoApellido, correo, contrasena, estado) VALUES (?,?,?,?,?,?,?,1)';
          $query = $con->prepare($sql);
          $query->execute([
            $this->ci, $this->nombre, $this->segundoNombre, $this->apellido, $this->segundoApellido, $this->correo, $this->contraseña
          ]);
          $idPersona = $con->lastInsertId();
          if ($idPersona) {
            $this->setId($idPersona);
            return $idPersona;
          } else {
            return null;
          }
        }
      }
    }

    /*Hace una baja logica en el atributo "Estado" de la tabla "Persona"*/
    public function bajaPersona()
    {
      $con = new Conexion;
      $sql = 'UPDATE Persona SET Estado = 0 WHERE IDPersona= ?';
      $query = $con->prepare($sql);
      $query->execute([
        $this->id
      ]);
    }

    /*Selecciona el Avatar de 1 Persona*/
    public function mostrarAvatar()
    {
      $con = new Conexion;
      $sql = 'SELECT Avatar FROM Persona WHERE IDPersona = ?';
      $query = $con->prepare($sql);
      $query->execute([
        $this->id
      ]);
      $query = $query->fetchAll();
      return $query[0]["Avatar"];
    }

    /*Actualiza el Avatar de 1 Persona en la tabla Persona*/
    public function modificarAvatar()
    {
      $con = new Conexion();
      $sql = "UPDATE Persona SET Avatar = ? WHERE IDPersona = ?;";
      $query = $con->prepare($sql);
      $query->execute([
        $this->getAvatar(), $this->getId()
      ]);
    }

    /*Actualiza el atributo "FondoChat" de la tabla "Persona"*/
    public function modificarFondoChat()
    {
      $con = new Conexion();
      $sql = "UPDATE Persona SET FondoChat = ? WHERE IDPersona = ?;";
      $query = $con->prepare($sql);
      $query->execute([
        $this->getFondoChat(), $this->getId()
      ]);
    }

    /*Selecciona todos datos de las Personas de 1 Grupo*/
    public function verGrupoPersona()
    {
      $con = new Conexion();
      $sql = "SELECT IDGrupo FROM Persona_Grupo WHERE IDPersona = ?";
      $query = $con->prepare($sql);
      $query->execute([
        $this->getId()
      ]);
      $query = $query->fetchAll();
      $IDGrupo = $query[0]["IDGrupo"];

      $sql = "SELECT nombre FROM Grupo WHERE IDGrupo = ?";
      $query = $con->prepare($sql);
      $query->execute([
        $IDGrupo
      ]);
      $query = $query->fetchAll();
      $nombreGrupo = $query[0]["nombre"];
      $this->setNombreGrupo($nombreGrupo);

      $sql = "SELECT IDPersona FROM Persona_Grupo WHERE IDGrupo = ?";
      $query = $con->prepare($sql);
      $query->execute([
        $IDGrupo
      ]);
      $query = $query->fetchAll();
      $i = 0;
      foreach ($query as $row) {
        $IDPersona[$i] = $row['IDPersona'];
        $i++;
      }
      $this->setGrupo(count($IDPersona));
      $j = 0;
      for ($i = 0; $i < count($IDPersona); $i++) {
        $IDPersona1 = $IDPersona[$i];
        $sql = "SELECT Nombre, Apellido, Conexion, correo FROM Persona WHERE IDPersona = ? and Estado = 1;";
        $query = $con->prepare($sql);
        $query->execute([
          $IDPersona1
        ]);
        $query = $query->fetchAll();
        if ($query != null) {
          $Nombre[$j] = $query[0]["Nombre"];
          $Apellido[$j] = $query[0]["Apellido"];
          $Conexion[$j] = $query[0]["Conexion"];
          $correo[$j] = $query[0]["correo"];
          $j++;
        }
      }
      $i = 0;
  ?>
      <table class="table text-white">
        <?php
        include('../../LogicaConexion/view/template/templateGrupoAlumnoHead.php');
        foreach ($Nombre as $row) {
          include('../../LogicaConexion/view/template/templateGrupoAlumnoBody.php');
          $i++;
        }
        ?>
      </table>
      <?php
    }

    /*Selecciona todos los datos de las Persona de todos los Grupo en que se encuentra 1 Docente*/
    public function verGrupoDocente()
    {
      $con = new Conexion();
      $sql = "SELECT IDGrupo FROM Persona_Grupo WHERE IDPersona = ?";
      $query = $con->prepare($sql);
      $query->execute([
        $this->getId()
      ]);
      $query = $query->fetchAll();
      $i = 0;
      foreach ($query as $row) {
        $IDGrupo[$i] = $row['IDGrupo'];
        $i++;
      }

      $j = 0;
      for ($i = 0; $i < count($IDGrupo); $i++) {
        $sql = "SELECT nombre FROM Grupo WHERE IDGrupo = ?";
        $query = $con->prepare($sql);
        $query->execute([
          $IDGrupo[$i]
        ]);
        $query = $query->fetchAll();
        foreach ($query as $row) {
          $nombreGrupo[$j] = $row['nombre'];
          $j++;
        }
      }
      $j = 0;

      for ($i = 0; $i < count($IDGrupo); $i++) {
        $sql = "SELECT IDPersona FROM Persona_Grupo WHERE IDGrupo = ?";
        $query = $con->prepare($sql);
        $query->execute([
          $IDGrupo[$i]
        ]);
        $query = $query->fetchAll();
      ?>
        <table class="table text-white">
    <?php
        include('../../LogicaConexion/view/template/templateGrupoDocenteHead.php');
        foreach ($query as $row) {
          $IDPersona[$j] = $row['IDPersona'];
          $sql = "SELECT Nombre, Apellido, Conexion FROM Persona WHERE IDPersona = ? AND Estado = 1";
          $query = $con->prepare($sql);
          $query->execute([
            $IDPersona[$j]
          ]);
          $query = $query->fetchAll();
          foreach ($query as $row) {
            include('../../LogicaConexion/view/template/templateGrupoDocenteBody.php');
          }
          $j++;
        }
      }
    }

    /*Selecciona el atributo "IDGrupo de la tabla "Grupo"*/
    public function idGrupo()
    {
      $con = new Conexion;
      $sql = 'SELECT IDGrupo FROM Grupo WHERE nombre= ?';
      $query = $con->prepare($sql);
      $query->execute([
        $this->grupo
      ]);
      $query = $query->fetchAll();
      return $query[0]["IDGrupo"];;
    }

    public function getCi()
    {
      return $this->ci;
    }

    public function getNombre()
    {
      return $this->nombre;
    }

    public function getSegundoNombre()
    {
      return $this->segundoNombre;
    }

    public function getApellido()
    {
      return $this->apellido;
    }

    public function getSegundoApellido()
    {
      return $this->segundoApellido;
    }

    public function getCorreo()
    {
      return $this->correo;
    }

    public function getContraseña()
    {
      return $this->contraseña;
    }


    public function getAvatar()
    {
      return $this->avatar;
    }

    public function getEstado()
    {
      return $this->estado;
    }

    public function setCi($ci): self
    {
      $this->ci = $ci;

      return $this;
    }

    public function setNombre($nombre): self
    {
      $this->nombre = $nombre;

      return $this;
    }

    public function setSegundoNombre($segundoNombre): self
    {
      $this->segundoNombre = $segundoNombre;

      return $this;
    }

    public function setApellido($apellido): self
    {
      $this->apellido = $apellido;

      return $this;
    }

    public function setSegundoApellido($segundoApellido): self
    {
      $this->segundoApellido = $segundoApellido;

      return $this;
    }

    public function setCorreo($correo): self
    {
      $this->correo = $correo;

      return $this;
    }

    public function setContraseña($contraseña): self
    {
      $this->contraseña = $contraseña;

      return $this;
    }

    public function setAvatar($avatar): self
    {
      $this->avatar = $avatar;

      return $this;
    }

    public function setEstado($estado): self
    {
      $this->estado = $estado;

      return $this;
    }

    public function getId()
    {
      return $this->id;
    }

    public function setId($id): self
    {
      $this->id = $id;

      return $this;
    }

    public function getGrupo()
    {
      return $this->grupo;
    }

    public function setGrupo($grupo)
    {
      $this->grupo = $grupo;

      return $this;
    }

    public function getNombreGrupo()
    {
      return $this->nombreGrupo;
    }

    public function setNombreGrupo($nombreGrupo): self
    {
      $this->nombreGrupo = $nombreGrupo;

      return $this;
    }

    public function getConexion()
    {
      return $this->conexion;
    }

    public function setConexion($conexion)
    {
      $this->conexion = $conexion;

      return $this;
    }

    public function getFondoChat()
    {
      return $this->fondoChat;
    }

    public function setFondoChat($fondoChat): self
    {
      $this->fondoChat = $fondoChat;

      return $this;
    }

    public function getCodigo()
    {
      return $this->codigo;
    }

    public function setCodigo($codigo): self
    {
      $this->codigo = $codigo;

      return $this;
    }
  }
    ?>