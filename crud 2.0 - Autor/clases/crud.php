<?php
    class crud{
        public function agregar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();

            $sql = "INSERT INTO autor (id_autor,nombre,apellido_1,apellido_2) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
            
            return mysqli_query($conexion,$sql);
        }
        
        public function obtenDatos($IDU){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            
            $sql = "SELECT id_autor,nombre,apellido_1,apellido_2 FROM autor WHERE id_autor = '$IDU'";
            
            $result = mysqli_query($conexion,$sql);
            $ver = mysqli_fetch_row($result);
            
            $datos = array(
                'id_autor' => $ver[0], 
                'nombre' => $ver[1], 
                'apellido_1' => $ver[2], 
                'apellido_2' => $ver[3]
            );
            
            return $datos;  
        }
        
        public function actualizar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "UPDATE autor SET nombre = '$datos[1]', apellido_1 = '$datos[2]', apellido_2 = '$datos[3]' WHERE id_autor = '$datos[0]'";
                
            return mysqli_query($conexion,$sql);
        }
        
        public function eliminar($id){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "DELETE FROM autor WHERE id_autor = '$id'";
            
            return mysqli_query($conexion,$sql);
        }
    }
?>