<?php
class Chat
{
    private $IDChat;
    private $nombre;
    private $IDDocente;
    private $correo;
    private $anfitrion;
    private $IDGrupo;

    /*1ero Verifica que el docente exista, 2do Verfica que el docente no este en otro chat activo de ese grupo, luego ingresa los datos del chat en la tabla "Chat"*/
    public function crearChat()
    {
        $con = new Conexion();
        $sql = "SELECT p.IDPersona FROM Persona p, Docente d WHERE p.correo = ? AND p.IDPersona = d.IDPersona;";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getCorreo()
        ]);
        $query = $query->fetchAll();
        if (isset($query[0]["IDPersona"])) {
            $this->setIDDocente($query[0]["IDPersona"]);
            $con = new Conexion();
            $sql = "SELECT IDDocente FROM Chat WHERE estado = 1 AND IDDocente = ? AND IDGrupo = ?;";
            $query = $con->prepare($sql);
            $query->execute([
                $this->getIDDocente(), $_SESSION['IDGrupo']
            ]);
            $query = $query->fetchAll();
            if ($query == null) {
                $id = $_SESSION['IDPersona'];
                $sql = "SELECT IDgrupo FROM Persona_Grupo WHERE IDPersona = ?";
                $query = $con->prepare($sql);
                $query->execute([
                    $id
                ]);
                $query = $query->fetchAll();
                $this->setIDGrupo($query[0]["IDgrupo"]);

                $sql = "INSERT INTO Chat(nombre,IDDocente,estado,IDGrupo,fechaHora) VALUES (?,?,1,?,?);";
                $fecha = date("Y-m-d H:i:s");
                $query = $con->prepare($sql);
                $query->execute([
                    $this->getNombre(), $this->getIDDocente(), $this->IDGrupo, date("Y-m-d H:i:s", strtotime('-3 hours', strtotime($fecha)))
                ]);
                $_SESSION['IDChat'] = $con->lastInsertId();
                $this->setIDChat($_SESSION['IDChat']);
                $sql = "INSERT INTO Participa(IDChat,anfitrion) VALUES (?,?);";
                $query = $con->prepare($sql);
                $query->execute([
                    $this->getIDChat(), $this->getAnfitrion()
                ]);
                return 1;
            } else {
                return 0;
            }
        } else {
            return 2;
        }
    }

    /*1ero Verifica que sea el Anfitrion el que esta eliminando el chat, 2do Agrega la descripcion del Chat y hace una baja logica en la tabal "Chat"*/
    public function eliminarChat($descripcion)
    {
        $con = new Conexion();
        $sql = "SELECT anfitrion FROM Participa WHERE IDChat = ?";
        $query = $con->prepare($sql);
        $query->execute([
            $this->getIDChat()
        ]);
        $query = $query->fetchAll();
        if ($query[0]["anfitrion"] != null) {
            if ($query[0]["anfitrion"] == $_SESSION['IDPersona']) {
                $sql = "UPDATE Chat SET descripcion = ? WHERE IDChat = ? ;";
                $query = $con->prepare($sql);
                $query->execute([
                    $descripcion, $this->getIDChat()
                ]);

                $sql = "UPDATE Chat SET estado = 0 WHERE IDChat = ? ;";
                $query = $con->prepare($sql);
                $query->execute([
                    $this->getIDChat()
                ]);
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    /*Selecciona los chats disponibles de 1 Grupo*/
    public function VerChatDisponible()
    {
        $año =  date("Y");
        $con = new Conexion();
        $id = $_SESSION['IDPersona'];
        $sql = "SELECT IDGrupo FROM Persona_Grupo WHERE IDPersona = $id AND año = $año;";
        $i = 0;
        foreach ($con->query($sql) as $row) {
            $IDGrupo[$i] = $row['IDGrupo'];
            $i++;
        }
        if ($con->query($sql)->fetchAll() != null) {
            $this->setNombre($IDGrupo);
        }
        $sql = "SELECT nombre, IDChat FROM Chat WHERE estado = 1 AND IDGrupo = $IDGrupo[0];";
        $query = $con->prepare($sql);
        $query->execute();
        return json_encode($query->fetchAll(PDO::FETCH_ASSOC));
    }

    /*Selecciona todos los chats activos en los que se encuentra 1 Docente*/
    public function VerChatDisponibleDocente()
    {
        $con = new Conexion();
        $id = $_SESSION['IDPersona'];
        $sql = "SELECT nombre, IDChat FROM Chat WHERE estado = 1 AND IDDocente = $id;";
        $query = $con->prepare($sql);
        $query->execute();
        return json_encode($query->fetchAll(PDO::FETCH_ASSOC));
    }

    public function getIDChat()
    {
        return $this->IDChat;
    }

    public function setIDChat($IDChat)
    {
        $this->IDChat = $IDChat;

        return $this;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getIDDocente()
    {
        return $this->IDDocente;
    }

    public function setIDDocente($IDDocente): self
    {
        $this->IDDocente = $IDDocente;

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

    public function getAnfitrion()
    {
        return $this->anfitrion;
    }

    public function setAnfitrion($anfitrion)
    {
        $this->anfitrion = $anfitrion;

        return $this;
    }

    public function getIDGrupo()
    {
        return $this->IDGrupo;
    }

    public function setIDGrupo($IDGrupo)
    {
        $this->IDGrupo = $IDGrupo;

        return $this;
    }
}
