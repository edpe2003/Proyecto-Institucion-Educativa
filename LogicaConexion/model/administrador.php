<?php
class Administrador extends Persona
{

    /*Hace una baja logica en la tabla Grupo, cambiando el estado*/
    public function bajaGrupo($idGrupo){
        $con = new Conexion;
        $sql = 'UPDATE Grupo SET estado = 0 WHERE IDGrupo = ?;';
        $query = $con->prepare($sql);
        $query->execute([
            $idGrupo
        ]);
    }

    /*1ero Borra todas las Asignaturas del Grupo, Luego las vuelve a insertar con los cambios hechos*/
    public function modificarGrupoAsignatura($idGrupo, $idAsignaturas){
        $con = new Conexion;
        $sql = 'DELETE FROM Asignatura_Grupo WHERE IDGrupo = ? ;';
        $query = $con->prepare($sql);
        $query->execute([
            $idGrupo
        ]);

        for ($i = 0; $i < count($idAsignaturas); $i++) {
            $sql = 'INSERT INTO Asignatura_Grupo VALUES (? ,?);';
            $query = $con->prepare($sql);
            $query->execute([
                $idAsignaturas[$i], $idGrupo
            ]);
        }
        return 1;
    }

    /*Modifica los atributos "nombre" y "orientacion" de la tabla Grupo*/
    public function modificarGrupo($idGrupo, $nombreGrupo, $orientacion)
    {
        $con = new Conexion;
        $sql = "UPDATE Grupo
                SET nombre = ?, orientacion= ?
                WHERE IDGrupo = ?;";
        $query = $con->prepare($sql);
        $query->execute([
            $nombreGrupo, $orientacion, $idGrupo
        ]);

        if ($query) {
            return 1;
        } else {
            return null;
        }
    }

    /*1ero Verifica que exista la Asignatura, luego modifica el Atributo NomAsignatura de la tabla Asignatura*/
    public function modificarAsignatura($nombreAsignatura, $idAsignaturas)
    {
        $con = new Conexion;

        $sql = 'SELECT NomAsignatura FROM Asignatura WHERE NomAsignatura = ?;';
        $query = $con->prepare($sql);
        $query->execute([
            $nombreAsignatura
        ]);
        if ($query->rowCount() > 0) {
            return null;
        }else {
            $sql = "UPDATE Asignatura
                SET NomAsignatura = ?
                WHERE IDAsignatura = ?;";
            $query = $con->prepare($sql);
            $query->execute([
                $nombreAsignatura, $idAsignaturas
            ]);
            return 1;
        }
    }

    /*Elimina de las tablas "Persona_Grupo, Alumno y Persona" las tuplas ingresadas por el alumno*/
    public function desaprobarAlumno()
    {
        $con = new Conexion;
        $idAlumno = $this->getId();
        $sql = "DELETE FROM Persona_Grupo WHERE IDPersona = $idAlumno;";
        $query = $con->query($sql);

        $sql = "DELETE FROM Alumno WHERE IDPersona = $idAlumno;";
        $query = $con->query($sql);

        $sql = "DELETE FROM Persona WHERE IDPersona = $idAlumno;";
        $query = $con->query($sql);


        if ($query) {
            return 1;
        } else {
            return null;
        }
    }

    /*Cambia el atributo "estadoInscripcion" de la tabla Alunmo por 1, para aprobar la Inscricion*/
    public function aprobarAlumno()
    {
        $con = new Conexion;
        $idAlumno = $this->getId();
        $sql = "UPDATE Alumno
                SET estadoInscripcion = 1
                WHERE IDPersona = $idAlumno;";
        $query = $con->query($sql);
        if ($query) {
            return 1;
        } else {
            return null;
        }
    }

    /*Selecciona todos los atributos de la tabla Asignatura_Grupo*/
    public function mostrarAsignaturaGrupo($idGrupo)
    {
        $con = new Conexion;
        $sql = "SELECT * FROM Asignatura_Grupo WHERE IDGrupo = $idGrupo;";
        $query = $con->query($sql);
        return $query->fetchAll();
    }

    /*Selecciona todos los atributos de la tabla Asignatura*/
    public function mostrarAsignatura()
    {
        $con = new Conexion;
        $sql = 'SELECT * FROM Asignatura;';
        $query = $con->query($sql);
        return $query->fetchAll();
    }

    /*Selecciona todos los atributos de la tabla Grupo*/
    public function mostrarGrupo()
    {
        $con = new Conexion;
        $sql = "SELECT * FROM Grupo WHERE estado = 1;";
        $query = $con->query($sql);
        return $query->fetchAll();
    }

    /*1ero verifica que no exista el grupo, luego inserta en la tabal "Grupo y Asignatura_Grupo" los valores que le llegan por parametro*/
    public function crearGrupo($nombreGrupo, $orientacion, $idAsignaturas)
    {
        $con = new Conexion;
        $sql = 'SELECT * FROM Grupo WHERE nombre=? AND orientacion=?;';
        $query = $con->prepare($sql);
        $query->execute([
            $nombreGrupo, $orientacion
        ]);
        if ($query->rowCount() > 0) {
            return null;
        } else {
            $sql = 'INSERT INTO Grupo(nombre, orientacion) VALUE(?, ?)';
            $query = $con->prepare($sql);
            $query->execute([
                $nombreGrupo, $orientacion
            ]);
            $idGrupo = $con->lastInsertId();
            for ($i = 0; $i < count($idAsignaturas); $i++) {
                $sql = 'INSERT INTO Asignatura_Grupo VALUES (? ,?);';
                $query = $con->prepare($sql);
                $query->execute([
                    $idAsignaturas[$i], $idGrupo
                ]);
            }
            return 1;
        }
    }

    /*1ero verifica que no exista la asignatura, luego Inserta los datos en la tabla "Asignatura"*/
    public function crearAsignatura($nombreAsignatura)
    {
        $con = new Conexion;
        $sql = 'SELECT NomAsignatura FROM Asignatura WHERE NomAsignatura = ?;';
        $query = $con->prepare($sql);
        $query->execute([
            $nombreAsignatura
        ]);
        if ($query->rowCount() > 0) {
            return null;
        } else {
            $sql = 'INSERT INTO Asignatura(NomAsignatura) VALUES(?);';
            $query = $con->prepare($sql);
            $query->execute([
                $nombreAsignatura
            ]);
            return 1;
        }
    }

    /*Modifica los datos en la tabla "Persona", dependiento del tipo que se "Alumno o Docente"*/
    public function modificarDatosPersona($idPersona, $dato, $tipo)
    {
        $con = new Conexion;
        $sql = 'SELECT ' . $tipo . '
                FROM Persona
                WHERE IDPersona = ?;';
        $query = $con->prepare($sql);
        $query->execute([
            $idPersona
        ]);
        $query = $query->fetchAll();
        if ($query[0][$tipo] != $dato) {

            if ($tipo != "correo") {
                $sql = 'UPDATE Persona
                    SET ' . $tipo . ' = ?
                    WHERE IDPersona = ?;';
                $query = $con->prepare($sql);
                $query->execute([
                    $dato, $idPersona
                ]);
                return 1;
            } else {
                $sql = 'SELECT ' . $tipo . '
                        FROM Persona
                        WHERE correo = ?;';
                $query = $con->prepare($sql);
                $query->execute([
                    $dato
                ]);
                $query = $query->fetchAll();
                if ($query[0]["correo"] == null) {
                    $sql = 'UPDATE Persona
                    SET ' . $tipo . ' = ?
                    WHERE IDPersona = ?;';
                    $query = $con->prepare($sql);
                    $query->execute([
                        $dato, $idPersona
                    ]);
                    return 1;
                } else {
                    return null;
                }
            }
        } else {
            return null;
        }
    }

    /*Modifica los datos de la tabla "Alumno"*/
    public function modificarDatosAlumno($idPersona, $dato, $tipo)
    {
        $con = new Conexion;
        $sql = 'SELECT ' . $tipo . '
                FROM Alumno
                WHERE IDPersona = ?;';
        $query = $con->prepare($sql);
        $query->execute([
            $idPersona
        ]);
        $query = $query->fetchAll();
        if ($query[0][$tipo] != $dato) {
            $sql = 'UPDATE Alumno
                    SET ' . $tipo . ' = ?
                    WHERE IDPersona = ?;';
            $query = $con->prepare($sql);
            $query->execute([
                $dato, $idPersona
            ]);
            return 1;
        } else {
            return null;
        }
    }

    /*Selecciona los datos necesarios para mostrarselos al Alumno en la seccion de Modificar Perfil*/
    public function mostrarDatosAlumno($idAlumno)
    {
        $con = new Conexion;
        $sql = 'SELECT p.IDPersona, p.CI, p.Nombre, p.SegundoNombre, p.Apellido, p.SegundoApellido, p.correo, p.Estado, a.NickName, a.estadoInscripcion, g.nombre, g.orientacion
        FROM Persona p, Alumno a , Grupo g, Persona_Grupo pe
        WHERE p.IDPersona=a.IDPersona and p.IDPersona=pe.IDPersona and g.IDGrupo=pe.IDGrupo and p.IDPersona = ?;';
        $query = $con->prepare($sql);
        $query->execute([
            $idAlumno
        ]);
        $query = $query->fetchAll();
        if ($query != null) {
            return $query;
        } else {
            return null;
        }
    }

    /*Muestra los Alumno que se han registrado, pero no han sido aceptados por el administrador*/
    public function mostrarPeticionesAlumno()
    {
        $con = new Conexion;
        $sql =  'SELECT p.nombre, p.apellido, p.CI, p.IDPersona
                FROM Persona p, Alumno a
                WHERE a.estadoInscripcion = ? AND p.IDPersona = a.IDPersona;';
        $query = $con->prepare($sql);
        $query->execute([
            0
        ]);
        $query = $query->fetchAll();
        if ($query != null) {
            return $query;
        } else {
            return null;
        }
    }

    /*Verifica que los datos ingresados en el login de Administrado sean correctos*/
    public function validarAdministrador()
    {
        $con = new Conexion();
        $sql = "SELECT p.contrasena, p.IDPersona FROM Persona p, Administrador a WHERE p.correo=? and p.Estado=1 and p.IDPersona = a.IDPersona";
        $query = $con->prepare($sql);
        $query->execute([
            parent::getCorreo()
        ]);
        $query = $query->fetchAll();
        if ($query != null) {
            $this->setId($query[0]["IDPersona"]);
            return $query[0]["contrasena"];
        } else {
            return null;
        }
    }

    /*Selecciona todos los docentes*/
    public function mostrarDocente()
    {
        $con = new Conexion;
        $sql = 'SELECT * FROM Persona p, Docente d WHERE p.IDPersona = d.IDPersona;';
        $IDDocente = array();
        $CI = array();
        $Nombre = array();
        $Apellido = array();
        $correo = array();
        $estado = array();
        foreach ($con->query($sql) as $row) {
            array_push($IDDocente, $row['IDPersona']);
            array_push($CI, $row['CI']);
            array_push($Nombre, $row['Nombre']);
            array_push($Apellido, $row['Apellido']);
            array_push($correo, $row['correo']);
        }
        parent::setId($IDDocente);
        parent::setCi($CI);
        parent::setNombre($Nombre);
        parent::setApellido($Apellido);
        parent::setCorreo($correo);
    }

    /*Selecciona todos los datos de 1 Docente*/
    public function mostrarDatosDocente()
    {
        $con = new Conexion;
        $IDDocente = parent::getId();
        $sql = "SELECT * FROM Persona p, Docente d WHERE p.IDPersona = d.IDPersona AND p.IDPersona = $IDDocente;";
        foreach ($con->query($sql) as $row) {
            $CI = $row['CI'];
            $Nombre = $row['Nombre'];
            $Apellido = $row['Apellido'];
            $correo = $row['correo'];
            $estado = $row['Estado'];
        }
        parent::setCi($CI);
        parent::setNombre($Nombre);
        parent::setApellido($Apellido);
        parent::setCorreo($correo);
        parent::setEstado($estado);
    }

    /*1ero Elimina los datos del docente en la tabla "Persona_Grupo", luego los vuelve a ingresar con los datos actualizados*/
    public function validarDocenteGrupo($IDGrupo)
    {
        $con = new Conexion();
        $año =  date("Y");
        if ($IDGrupo) {
            $sql = "DELETE FROM Persona_Grupo WHERE IDPersona = ?";
            $query = $con->prepare($sql);
            $query->execute([
                parent::getId()
            ]);
            $sql = "UPDATE Persona SET Estado=? WHERE IDPersona = ?";
            $query = $con->prepare($sql);
            $query->execute([
                1, parent::getId()
            ]);
            for ($i = 0; $i < count($IDGrupo); $i++) {
                $sql = "INSERT INTO Persona_Grupo VALUES (?,?,?)";
                $query = $con->prepare($sql);
                $query->execute([
                    parent::getId(), $IDGrupo[$i], $año
                ]);
            }
        }
    }

    /*1ero Elimina los datos del docente en la tabla "Asignatura_Docente", luego los vuelve a ingresar con los datos actualizados*/
    public function validarDocenteAsignatura($IDAsignatura)
    {
        $con = new Conexion();
        if ($IDAsignatura) {
            $sql = "DELETE FROM Asignatura_Docente WHERE IDDocente = ?";
            $query = $con->prepare($sql);
            $query->execute([
                parent::getId()
            ]);
            for ($i = 0; $i < count($IDAsignatura); $i++) {
                $sql = "INSERT INTO Asignatura_Docente VALUES (?,?)";
                $query = $con->prepare($sql);
                $query->execute([
                    $IDAsignatura[$i], parent::getId()
                ]);
            }
        }
    }

    /*Hace una baja logica en la tabla "Persona", en el atributo "Estado"*/
    public function eliminarDocente()
    {
        $con = new Conexion();
        $sql = "UPDATE Persona SET Estado = 0 WHERE IDPersona = ?";
        $query = $con->prepare($sql);
        $query->execute([
            parent::getId()
        ]);
    }

    /*Selecciona los grupos de 1 Docente*/
    public function mostrarGruposDocente($IDDocente)
    {
        $con = new Conexion();
        $sql = "SELECT IDGrupo FROM Persona_Grupo WHERE IDPersona = ?";
        $query = $con->prepare($sql);
        $query->execute([
            $IDDocente
        ]);
        return $query->fetchAll();
    }
    
    /*Selecciona las asignaturas de 1 Docente*/
    public function mostrarAsignaturasDocente($IDDocente)
    {
        $con = new Conexion();
        $sql = "SELECT IDAsignatura FROM Asignatura_Docente WHERE IDDocente = ?";
        $query = $con->prepare($sql);
        $query->execute([
            $IDDocente
        ]);
        return $query->fetchAll();
    }
}