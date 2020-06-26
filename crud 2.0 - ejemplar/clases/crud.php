<?php
    class crud{
        public function agregar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();

            $sql = "INSERT INTO ejemplar (clave_ejemplar,fecha_recolec,datos_adicionales,id_especie,id_municipio,id_donante) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
            
            return mysqli_query($conexion,$sql);
        }
        
        public function obtenDatos($IDU){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            
            $sql = "SELECT clave_ejemplar,fecha_recolec,datos_adicionales,id_especie,id_municipio,id_donante FROM ejemplar WHERE clave_ejemplar = '$IDU'";
            
            $result = mysqli_query($conexion,$sql);
            $ver = mysqli_fetch_row($result);
            
            $datos = array(
                'clave_ejemplar' => $ver[0], 
                'fecha_recolec' => $ver[1], 
                'datos_adicionales' => $ver[2], 
                'id_especie' => $ver[3], 
                'id_municipio' => $ver[4], 
                'id_donante' => $ver[5], 
            );
            
            return $datos;  
        }
        
        public function actualizar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "UPDATE ejemplar SET fecha_recolec = '$datos[1]', datos_adicionales = '$datos[2]', id_especie = '$datos[3]', id_municipio = '$datos[4]', id_donante = '$datos[5]' WHERE clave_ejemplar = '$datos[0]'";
                
            return mysqli_query($conexion,$sql);
        }
        
        public function eliminar($id){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "DELETE FROM ejemplar WHERE clave_ejemplar = '$id'";
            
            return mysqli_query($conexion,$sql);
        }
    }
?>