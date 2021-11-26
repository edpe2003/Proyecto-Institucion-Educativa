<?php
class Alumno extends Persona
{
    private $nickName;

    /*Inserta los datos del Alumno en las tablas "Persona, Alumno y Persona_Grupo"*/
    public function insertarAlumno($persona)
    {
        $con = new Conexion();
        $id = $persona->insertarPersona();
        if ($id != null) {
            $sql = "INSERT INTO Alumno(IDPersona,estadoInscripcion) VALUES ('$id',0)";
            $con->query($sql);
            $sql = "INSERT INTO Persona_Grupo VALUES (?, ?, ?)";
            $query = $con->prepare($sql);
            $query->execute([
                $id, $persona->getGrupo(), date("Y")
            ]);
            return 1;
        } else {
            return 0;
        }
    }

    /*Verifica que lso datos Ingresados en el login de Alumno esten correctos y validos*/
    public function validarAlumno()
    {
        $con = new Conexion();
        $sql = "SELECT p.contrasena, p.IDPersona, g.IDGrupo FROM Persona p, Alumno a, Persona_Grupo g WHERE p.correo=? AND p.Estado=1 AND a.estadoInscripcion = 1 AND p.IDPersona = a.IDPersona AND g.IDPersona = p.IDPersona;";
        $query = $con->prepare($sql);
        $query->execute([
            parent::getCorreo()
        ]);
        $query = $query->fetchAll();
        if ($query != null) {
            $this->setId($query[0]["IDPersona"]);
            $_SESSION['IDGrupo'] = $query[0]["IDGrupo"];
            return $query[0]["contrasena"];
        } else {
            return null;
        }
    }

    /*Selecciona la contraseña de 1 Alumno*/
    public function devolverContraseñaAlumno()
    {
        $con = new Conexion();
        $sql = "SELECT p.contrasena, p.IDPersona FROM Persona p, Alumno a WHERE p.IDPersona=? and p.Estado=1 and a.estadoInscripcion = 1 and p.IDPersona = a.IDPersona";
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

    /*Actualiza los datos de 1 Alumno en la tabla "Alumno"*/
    public function ModificarNickAlumno()
    {
        $con = new Conexion();
        $sql = "UPDATE Alumno SET nickname = ? WHERE IDPersona= ? ;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->nickName, parent::getId()
        ]);
        $query = $query->fetchAll();
        if (!$query) {
            return 1;
        } else {
            return null;
        }
    }

    /*Hashea la contraseña del Alumno para luego actualizarla por la antigua en la tabla "Persona"*/
    public function ModificarContraseñaAlumno()
    {
        parent::setContraseña(password_hash(parent::getContraseña(), PASSWORD_BCRYPT));
        $con = new Conexion();
        $sql = "UPDATE Persona SET contrasena = ? WHERE IDPersona= ?;";
        $query = $con->prepare($sql);
        $query->execute([
            parent::getContraseña(), parent::getId()
        ]);
    }

    /*Selecciona todos los datos de la tabla "Persona" y el nickname de la tabla "Alumno" de 1 Alumno*/
    public function VerDatosAlumno()
    {
        $con = new Conexion;
        $VerPersona = "SELECT * FROM Persona WHERE IDPersona =" . parent::getId();
        $VerAlumno  = "SELECT NickName FROM Alumno WHERE IDPersona =" . parent::getId();
        foreach ($con->query($VerAlumno) as $row) {
            $this->setNickName($row['NickName']);
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

    /*Activa la conexion en el atributo "Conexion" de la tabla "Persona" y guarda registro de la conexion en la tabla "Registro_Conexion"*/
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

    /*Desactiva la conexion en el atributo "Conexion" de la tabla "Persona" y guarda registro de la conexion en la tabla "Registro_Conexion"*/
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

    /*Selecciona todos los Docentes de un grupo en especifico*/
    public function verDocentesDeGrupo($IDPersona)
    {
        $con = new Conexion();
        $sql = "SELECT IDGrupo
        FROM Persona_Grupo
        WHERE IDPersona = ?";
        $query = $con->prepare($sql);
        $query->execute([
            $IDPersona
        ]);
        $query = $query->fetchAll();
        $IDGrupo =  $query[0]["IDGrupo"];

        $sql = "SELECT p.correo
        FROM Persona p, Persona_Grupo g, Docente d
        WHERE p.IDPersona = g.IDPersona AND d.IDPersona = p.IDPersona AND g.IDGrupo = ?;";
        $query = $con->prepare($sql);
        $query->execute([
            $IDGrupo
        ]);
        return $query->fetchAll();
    }

    public function getNickName()
    {
        return $this->nickName;
    }

    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }
}
