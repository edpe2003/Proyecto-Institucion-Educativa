<?php
class Mensaje
{
    private $id;
    private $mensaje;
    private $usuario;
    private $fecha;
    private $IDChat;

    /*Inserta los datos necesarios en la tabla "MensajeChat"*/
    public function enviarMensaje()
    {
        $con = new Conexion();
        $sql = "INSERT INTO MensajeChat(texto,IDPersona,fechaHora,IDChat) VALUES (?,?,?,?)";
        $query = $con->prepare($sql);
        $query->execute([
            $this->mensaje, $this->usuario, date("Y-m-d H:i:s", strtotime('-3 hours', strtotime($this->fecha))), $this->IDChat
        ]);
    }

    /*Selecciona todos los mensajes de 1 Chat*/
    public function verMensaje()
    {
        $con = new Conexion();
        $IDChat = $this->getIDChat();
        $sql = "SELECT *
        FROM Chat
        WHERE IDChat= $IDChat AND estado = 1";
        $query = $con->prepare($sql);
        $query->execute();
        $query = $query->fetchAll();
        if ($query != null) {
            $sql = "SELECT p.nombre, m.texto, m.fechaHora, p.IDPersona, p.avatar
            FROM MensajeChat m, Persona p 
            WHERE m.IDChat= $IDChat AND p.IDPersona=m.IDPersona ORDER BY m.IDMensaje";
            $query = $con->prepare($sql);
            $query->execute();
            return json_encode($query->fetchAll(PDO::FETCH_ASSOC));
        } else {
            unset($_SESSION['IDChat']);
            return 0;
        }
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

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getIDChat()
    {
        return $this->IDChat;
    }

    public function setIDChat($IDChat): self
    {
        $this->IDChat = $IDChat;

        return $this;
    }
}
