<?php
class Consulta
{
    private $IDConsulta;
    private $IDPersona;
    private $IDDocente;
    private $IDAlumno;
    private $asunto;
    private $pregunta;
    private $respuesta;
    private $fechaHora;
    private $estado;
    private $para;
    private $de;
    private $HoraInicio;
    private $HoraFinalizacion;
    private $DiasDisponibles;
    private $correo;
    private $avatar;

    /*Selecciona todas las consultas de 1 Alumno*/
    public function mostrarConsultaAlumno($alumno)
    {
        $con = new Conexion();
        $sql = "SELECT * 
                FROM Consulta 
                WHERE IDAlumno=?
                order by IDConsulta desc;";

        $query = $con->prepare($sql);
        $query->execute([
            $alumno->getId()
        ]);
        if ($query->rowCount() > 0) {
            $i = 0;
            foreach ($query as $row) {
                $IDConsulta[$i] = $row['IDConsulta'];
                $IDDocente[$i]  = $row['IDDocente'];
                $IDAlumno[$i]   = $row['IDAlumno'];
                $asunto[$i]     = $row['asunto'];
                $pregunta[$i]   = $row['consulta'];
                $respuesta[$i]  = $row['respuesta'];
                $fechaHora[$i]  = $row['fechaHora'];
                $estado[$i]     = $row['estado'];
                $i++;
            }
            $sql = "SELECT p.correo 
                    FROM Persona p, Consulta c 
                    WHERE c.IDDocente = p.IDPersona AND c.IDAlumno = ?
                    order by IDConsulta desc;";

            $query = $con->prepare($sql);
            $query->execute([
                $alumno->getId()
            ]);
            $i = 0;
            foreach ($query as $row) {
                $para[$i] = $row['correo'];
                $i++;
            }
            $this->setIDConsulta($IDConsulta);
            $this->setIDDocente($IDDocente);
            $this->setIDAlumno($IDAlumno);
            $this->setAsunto($asunto);
            $this->setPregunta($pregunta);
            $this->setRespuesta($respuesta);
            $this->setFechaHora($fechaHora);
            $this->setEstado($estado);
            $this->setPara($para);
            return 1;
        } else {
            return null;
        }
    }

    /*1ero Verifica el el docente a quien le envia la consulta este correcto, luego Inserta los datos en la tabla "Consulta"*/
    public function generarConsultaAlumno()
    {
        $con = new Conexion();
        $sql = "SELECT p.IDPersona 
                FROM Persona p, Docente d 
                WHERE p.IDPersona =  d.IDPersona and p.correo = ?;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getPara()
        ]);

        if ($query->rowCount() > 0) {
            $query = $query->fetchAll();
            $this->setIDDocente($query[0]["IDPersona"]);
            $sql = "INSERT INTO Consulta(IDDocente, IDAlumno, asunto, consulta, respuesta, estado, fechaHora)
        VALUES (?, ?, ?, ?, ?, ?, ?);";

            $query = $con->prepare($sql);

            $query->execute([
                $this->getIDDocente(), $this->getIDAlumno(), $this->getAsunto(), $this->getPregunta(), $this->getRespuesta(), $this->getEstado(), $this->getFechaHora()
            ]);
            return 1;
        } else {
            return null;
        }
    }

    /*Selecciona los datos necesarios de 1 Consulta*/
    public function verConsultaAlumno()
    {
        $con = new Conexion();
        $sql = "SELECT asunto, consulta, respuesta, IDDocente, estado FROM Consulta WHERE IDConsulta = ?;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getIDConsulta()
        ]);
        foreach ($query as $row) {
            $this->setEstado($row['estado']);
            $this->setAsunto($row['asunto']);
            $this->setPregunta($row['consulta']);
            $this->setRespuesta($row['respuesta']);
            $IDDocente = $row['IDDocente'];
        }

        $sql = "SELECT p.correo, d.DiasDisponibles, d.HoraInicio, d.HoraFinalizacion, p.avatar
        FROM Persona p, Docente d
        WHERE p.IDPersona = d. IDPersona AND p.IDPersona = ?;";
        $query2 = $con->prepare($sql);
        $query2->execute([
            $IDDocente
        ]);
        foreach ($query2 as $row) {
            $this->setAvatar($row['avatar']);
            $this->setCorreo($row['correo']);
            $this->setDiasDisponibles($row['DiasDisponibles']);
            $this->setHoraInicio($row['HoraInicio']);
            $this->setHoraFinalizacion($row['HoraFinalizacion']);
        }

    }

    /*Selecciona los atributos "Asunto, Estado, IDConsulta" de la tabla "Consulta"*/
    public function verConsultaHomeAlumno()
    {
        $con = new Conexion();
        $sql = "SELECT Asunto,Estado,IDConsulta FROM Consulta WHERE IDAlumno= ? ORDER BY  IDConsulta desc LIMIT 8;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getIDAlumno()
        ]);
        if ($query->rowCount() > 0) {
            $i = 0;
            foreach ($query as $row) {
                $Asunto[$i] = $row['Asunto'];
                $Estado[$i] = $row['Estado'];
                $IDConsulta[$i] = $row['IDConsulta'];
                $i++;
            }
            $this->setAsunto($Asunto);
            $this->setEstado($Estado);
            $this->setIDConsulta($IDConsulta);
            return 1;
        } else {
            return null;
        }
    }

    /*Selecciona todas las consultas que han sido dirigidas a 1 Docente*/
    public function mostrarConsultaDocente()
    {
        $con = new Conexion();
        $sql = "SELECT * 
                FROM Consulta 
                WHERE IDDocente=?
                order by IDConsulta desc;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getIDDocente()
        ]);
        if ($query->rowCount() > 0) {
            $i = 0;
            foreach ($query as $row) {
                $IDConsulta[$i] = $row['IDConsulta'];
                $IDDocente[$i]  = $row['IDDocente'];
                $IDAlumno[$i]   = $row['IDAlumno'];
                $asunto[$i]     = $row['asunto'];
                $pregunta[$i]   = $row['consulta'];
                $respuesta[$i]  = $row['respuesta'];
                $fechaHora[$i]  = $row['fechaHora'];
                $estado[$i]     = $row['estado'];
                $i++;
            }

            $sql = "SELECT p.correo, p.avatar
                    FROM Persona p, Consulta c 
                    WHERE c.IDAlumno= p.IDPersona AND c.IDDocente = ?
                    order by IDConsulta desc;";
            $query = $con->prepare($sql);
            $query->execute([
                $this->getIDDocente()
            ]);
            $i = 0;
            foreach ($query as $row) {
                $de[$i] = $row['correo'];
                $avatar     = $row['avatar'];
                $i++;
            }
            $this->setIDConsulta($IDConsulta);
            $this->setIDDocente($IDDocente);
            $this->setIDAlumno($IDAlumno);
            $this->setAsunto($asunto);
            $this->setPregunta($pregunta);
            $this->setRespuesta($respuesta);
            $this->setFechaHora($fechaHora);
            $this->setEstado($estado);
            $this->setDe($de);
            $this->setAvatar($avatar);
            return 1;
        } else {
            return null;
        }
    }

    /*Selecciona todos los datos de 1 Consulta*/
    public function mostrarRespuestaDocente()
    {
        $con = new Conexion();
        $sql = "SELECT * FROM Consulta WHERE IDConsulta=?;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getIDConsulta()
        ]);
        if ($query->rowCount() > 0) {
            $i = 0;
            foreach ($query as $row) {
                $IDConsulta = $row['IDConsulta'];
                $IDDocente  = $row['IDDocente'];
                $IDAlumno   = $row['IDAlumno'];
                $contenido  = $row['consulta'];
                $asunto     = $row['asunto'];
                $respuesta  = $row['respuesta'];
                $fechaHora  = $row['fechaHora'];
                $estado     = $row['estado'];
                $i++;
            }
            $sql = "SELECT p.correo, p.avatar FROM Persona p, Consulta c WHERE c.IDAlumno= p.IDPersona AND c.IDDocente = ? AND c.IDConsulta = ?;";
            $query = $con->prepare($sql);
            $query->execute([
                $this->getIDDocente(), $this->getIDConsulta()
            ]);
            $i = 0;
            foreach ($query as $row) {
                $de = $row['correo'];
                $avatar     = $row['avatar'];
                $i++;
            }
            $this->setIDConsulta($IDConsulta);
            $this->setIDDocente($IDDocente);
            $this->setIDAlumno($IDAlumno);
            $this->setAsunto($asunto);
            $this->setPregunta($contenido);
            $this->setRespuesta($respuesta);
            $this->setFechaHora($fechaHora);
            $this->setEstado($estado);
            $this->setDe($de);
            $this->setAvatar($avatar);
            return 1;
        } else {
            return null;
        }
    }

    /*Actualiza el atributo "respuesta" de la tabla "Consulta" de 1 Consulta y cambia el estado de Leido a Respondido*/
    public function responderConsulta()
    {
        $con = new Conexion();
        $sql = "UPDATE Consulta SET respuesta = ? WHERE IDConsulta = ?";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getRespuesta(), $this->getIDConsulta()
        ]);
        $this->setEstado('Contestado');
        $this->actualizarEstado();
    }

    /*Actualiza el estado de 1 Consulta*/
    public function actualizarEstado()
    {
        $con = new Conexion();
        $sql = "UPDATE Consulta SET Estado = ? WHERE IDConsulta = ?";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getEstado(), $this->getIDConsulta()
        ]);
    }

    /*Selecciona todas las consultas realizadas*/
    public function verConsultasAdministrador()
    {
        $con = new Conexion();
        $sql = "SELECT * FROM Consulta;";
        $i = 0;
        foreach ($con->query($sql) as $row) {
            $IDConsulta[$i] = $row['IDConsulta'];
            $IDAlumno[$i] = $row['IDAlumno'];
            $IDDocente[$i] = $row['IDDocente'];
            $asunto[$i] = $row['asunto'];
            $pregunta[$i] = $row['consulta'];
            $respuesta[$i] = $row['respuesta'];
            $fechaHora[$i] = $row['fechaHora'];
            $estado[$i] = $row['estado'];
            $i++;
        }
        if ($IDConsulta) {
            $this->setIDConsulta($IDConsulta);
            $this->setIDAlumno($IDAlumno);
            $this->setIDDocente($IDDocente);
            $this->setAsunto($asunto);
            $this->setPregunta($pregunta);
            $this->setRespuesta($respuesta);
            $this->setFechaHora($fechaHora);
            $this->setEstado($estado);
            $IDAlumno = $this->getIDAlumno();
            for ($i = 0; $i < count($IDAlumno); $i++) {
                $Alumno = $IDAlumno[$i];
                $sql = "SELECT correo FROM Persona WHERE IDPersona = ?;";
                $query = $con->prepare($sql);
                $query->execute([
                    $Alumno
                ]);
                $query = $query->fetchAll();
                $NomAlumno[$i] = $query[0]["correo"];
            }
            return $NomAlumno;
        }
    }

    /*Selecciona el correo de 1 Persona*/
    public function verCorreoPersona()
    {
        $con = new Conexion();
        $sql = "SELECT correo FROM Persona WHERE IDPersona = ?;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getIDPersona()
        ]);
        $query = $query->fetchAll();
        return $query[0]["correo"];
    }

    /*Selecciona los datos de una consulta*/
    public function verDatosConsultaAlumno()
    {
        $con = new Conexion();
        $sql = "SELECT asunto, consulta, respuesta FROM Consulta WHERE IDConsulta = ?;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getIDConsulta()
        ]);
        foreach ($query as $row) {
            $this->setAsunto($row['asunto']);
            $this->setPregunta($row['consulta']);
            $this->setRespuesta($row['respuesta']);
        }
    }

    public function getIDConsulta()
    {
        return $this->IDConsulta;
    }

    public function getIDDocente()
    {
        return $this->IDDocente;
    }

    public function getIDAlumno()
    {
        return $this->IDAlumno;
    }

    public function getAsunto()
    {
        return $this->asunto;
    }

    public function getPregunta()
    {
        return $this->pregunta;
    }

    public function getRespuesta()
    {
        return $this->respuesta;
    }

    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setIDConsulta($IDConsulta): self
    {
        $this->IDConsulta = $IDConsulta;

        return $this;
    }

    public function setIDDocente($IDDocente): self
    {
        $this->IDDocente = $IDDocente;

        return $this;
    }

    public function setIDAlumno($IDAlumno): self
    {
        $this->IDAlumno = $IDAlumno;

        return $this;
    }

    public function setAsunto($asunto): self
    {
        $this->asunto = $asunto;

        return $this;
    }

    public function setPregunta($pregunta): self
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    public function setRespuesta($respuesta): self
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    public function setFechaHora($fechaHora): self
    {
        $this->fechaHora = $fechaHora;

        return $this;
    }

    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getPara()
    {
        return $this->para;
    }

    public function setPara($para): self
    {
        $this->para = $para;

        return $this;
    }

    public function getDe()
    {
        return $this->de;
    }

    public function setDe($de): self
    {
        $this->de = $de;

        return $this;
    }

    public function getIDPersona()
    {
        return $this->IDPersona;
    }

    public function setIDPersona($IDPersona)
    {
        $this->IDPersona = $IDPersona;

        return $this;
    }

    public function getHoraInicio()
    {
        return $this->HoraInicio;
    }

    public function setHoraInicio($HoraInicio)
    {
        $this->HoraInicio = $HoraInicio;

        return $this;
    }

    public function getHoraFinalizacion()
    {
        return $this->HoraFinalizacion;
    }

    public function setHoraFinalizacion($HoraFinalizacion)
    {
        $this->HoraFinalizacion = $HoraFinalizacion;

        return $this;
    }

    public function getDiasDisponibles()
    {
        return $this->DiasDisponibles;
    }

    public function setDiasDisponibles($DiasDisponibles)
    {
        $this->DiasDisponibles = $DiasDisponibles;

        return $this;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }
}
