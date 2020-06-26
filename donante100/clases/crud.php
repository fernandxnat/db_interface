<?php
    class crud{
        public function agregar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();

            $sql = "INSERT INTO donante (id_donante, nombre_donante, apellido_1, apellido_2, tipo, id_tipo_donante) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
            
            return mysqli_query($conexion,$sql);
        }
        
        public function obtenDatos($IDU){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            
            $sql = "SELECT id_donante, nombre_donante, apellido_1, apellido_2, tipo, id_tipo_donante FROM donante WHERE id_donante = '$IDU'";
            
            $result = mysqli_query($conexion,$sql);
            $ver = mysqli_fetch_row($result);
            
            $datos = array(
                'id_donante' => $ver[0], 
                'nombre_donante' => $ver[1], 
                'apellido_1' => $ver[2], 
                'apellido_2' => $ver[3], 
                'tipo' => $ver[4], 
                'id_tipo_donante' => $ver[5]
            );
            
            return $datos;  
        }
        
        public function actualizar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "UPDATE donante SET nombre_donante = '$datos[1]', apellido_1 = '$datos[2]', apellido_2 = '$datos[3]', tipo = '$datos[4]', id_tipo_donante = '$datos[5]' WHERE id_donante = '$datos[0]'";
                
            return mysqli_query($conexion,$sql);
        }
        
        public function eliminar($id){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "DELETE FROM donante WHERE id_donante = '$id'";
            
            return mysqli_query($conexion,$sql);
        }
    }
?>