<?php
    class crud{
        public function agregar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();

            $sql = "INSERT INTO tipo_donante (id_tipo_donante, nombre_donante) VALUES ('$datos[0]','$datos[1]')";
            
            return mysqli_query($conexion,$sql);
        }
        
        public function obtenDatos($IDU){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            
            $sql = "SELECT id_tipo_donante, nombre_donante FROM tipo_donante WHERE id_tipo_donante = '$IDU'";
            
            $result = mysqli_query($conexion,$sql);
            $ver = mysqli_fetch_row($result);
            
            $datos = array(
                'id_tipo_donante' => $ver[0], 
                'nombre_donante' => $ver[1]
            );
            
            return $datos;  
        }
        
        public function actualizar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "UPDATE tipo_donante SET nombre_donante = '$datos[1]' WHERE id_tipo_donante = '$datos[0]'";
                
            return mysqli_query($conexion,$sql);
        }
        
        public function eliminar($id){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "DELETE FROM tipo_donante WHERE id_tipo_donante = '$id'";
            
            return mysqli_query($conexion,$sql);
        }
    }
?>