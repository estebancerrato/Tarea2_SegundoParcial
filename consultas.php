<?php
    class repositoriofunciones{
        public function consultaAlumnos(){
            include 'conexion.php';      
            
            $query = mysqli_query($conexion, "SELECT *  FROM tbl_alumno;")
            or die('error: '.mysqli_error($conexion));           
                  
            echo "
            <table class='table table-responsive table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>Numero de identificacion</th>
                        <th scope='col'>Primer Nombre</th>
                        <th scope='col'>Segundo Nombre</th>
                        <th scope='col'>Primer Apellido</th>
                        <th scope='col'>Segundo Apellido</th>
                        <th scope='col'>Genero</th>
                        <th scope='col'>Fecha de Nacimiento</th>
                        <th scope='col'>Nacionalidad</th>
                        <th scope='col'>Direccion</th>
                        <th scope='col'>Departamento</th>
                        <th scope='col'>Municipio</th>
                        <th scope='col'>Telefono Fijo</th>
                        <th scope='col'>Telefono Celular</th>
                        <th scope='col'>Becado</th>
                        <th scope='col'>Fecha de Matricula</th>
                        <th scope='col'>Grado</th>
                        <th scope='col'>Estado</th>
                    </tr>
                </thead>
                <tbody>      
            ";            
           
            while($data = mysqli_fetch_assoc($query)){
                echo "
                <tr>
                    <form  method='POST' name='form1'>
                        <th scope='row'>$data[alumno_identidad]</th>
                        <td>$data[alumno_primer_nombre]</td>
                        <td>$data[alumno_segundo_nombre]</td>
                        <td>$data[alumno_primer_apellido]</td>
                        <td>$data[alumno_segundo_apellido]</td>
                        <td>$data[alumno_genero]</td>
                        <td>$data[alumno_fecha_nacimiento]</td>
                        <td>$data[alumno_nacionalidad]</td>
                        <td>$data[alumno_direccion]</td>
                        <td>$data[alumno_departamento]</td>
                        <td>$data[alumno_municipio]</td>
                        <td>$data[alumno_tel_fijo]</td>
                        <td>$data[alumno_tel_celular]</td>
                        <td>$data[alumno_becado]</td>
                        <td>$data[alumno_fecha_matricula]</td>
                        <td>$data[alumno_grado]</td>
                        <td>$data[alumno_estado]</td>
                    </form>
                </tr>
                ";
            }            
            
            echo "
                </tbody>
            </table>            
            ";        
        }
        public function consultaEmpleados(){
            include 'conexion.php';      
            
            $query = mysqli_query($conexion, "SELECT *  FROM tbl_empleado;")
            or die('error: '.mysqli_error($conexion));           
                  
            echo "
           
            <table class='table table-responsive table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>Nombres</th>
                        <th scope='col'>Primer Apellido</th>
                        <th scope='col'>Segundo Apellido</th>
                        <th scope='col'>Cedula Empleado</th>
                        <th scope='col'>Fecha Ingreso</th>
                        <th scope='col'>Fecha Nacimiento</th>
                        <th scope='col'>Estado Civil</th>
                        <th scope='col'>Dirección</th>
                        <th scope='col'>Correo Electronico</th>
                        <th scope='col'>Tipo</th>
                        <th scope='col'>Grado Academico</th>
                        <th scope='col'>Genero</th>
                        <th scope='col'>Estado</th>
                        <th scope='col'>Telefono Fijo</th>
                        <th scope='col'>Telefono Celular</th>
                        <th scope='col'>Salario</th>
                        <th scope='col'>Observaciones</th>
                    </tr>
                </thead>
                <tbody>      
            ";            
           
            while($data = mysqli_fetch_assoc($query)){
                echo "
                <tr>
                    <form  method='POST' name='form1'>
                        <td>$data[empleado_nombres]</td>
                        <td>$data[empleado_primero_apellido]</td>
                        <td>$data[empleado_segundo_apellido]</td>
                        <td>$data[empleado_cedula]</td>
                        <td>$data[empleado_fecha_ingreso]</td>
                        <td>$data[empleado_fecha_nacimiento]</td>
                        <td>$data[empleado_estado_civil]</td>
                        <td>$data[empleado_direccion]</td>
                        <td>$data[empleado_correo_elecronico]</td>
                        <td>$data[empleado_tipo]</td>
                        <td>$data[empleado_grado_academico]</td>
                        <td>$data[empleado_genero]</td>
                        <td>$data[empleado_estado]</td>
                        <td>$data[empleado_telefono_fijo]</td>
                        <td>$data[empleado_telefono_celular]</td>
                        <td>$data[empleado_salario]</td>
                        <td>$data[empleado_observaciones]</td>
                    </form>
                </tr>
                ";
            }            
            
            echo "
                </tbody>
            </table>  
            </div>          
            ";        
        }
        public function consultaUsuarios(){
            include 'conexion.php';      
            
            $query = mysqli_query($conexion,
            "select IFNULL(u.usuario_codigo,' ') as Usuario , ifnull(u.usuario_clave,' ') as Clave, 
            CONCAT(e.empleado_nombres,' ',e.empleado_primero_apellido, ' ', e.empleado_segundo_apellido) as Nombre_Completo 
            from tbl_usuario u RIGHT JOIN tbl_empleado e on u.empleado_cedula = e.empleado_cedula"
            )or die('error: '.mysqli_error($conexion));           
                  
            echo "
            <style> 
                .padre {
                    height: auto;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .hijo {
                
                    margin-left: 10%;
                    margin-right:10%;
                }

            </style>
            <div class='padre'>
                <div class='hijo'>
                    <table class='table table-responsive table-striped'>
                        <thead>
                            <tr>
                                <th scope='col'>Usuario</th>
                                <th scope='col'>Clave</th>
                                <th scope='col'>Nombre Completo</th>
                            </tr>
                        </thead>
                        <tbody>      
            ";            
           
            while($data = mysqli_fetch_assoc($query)){
                echo "
                        <tr>
                            <form  method='POST' name='form1'>
                                <td>$data[Usuario]</td>
                                <td>$data[Clave]</td>
                                <td>$data[Nombre_Completo]</td>
                            </form>
                        </tr>
                ";
            }            
            
            echo "
                      </tbody>
                    </table>
                </div> 
            </div>            
            ";        
        }

    }


?>