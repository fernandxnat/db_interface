<?php
    class crud{
        public function agregar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();

            $sql = "INSERT INTO forma_de_vida (id_forma, nombre) VALUES ('$datos[0]','$datos[1]')";
            
            return mysqli_query($conexion,$sql);
        }
        
        public function obtenDatos($IDU){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            
            $sql = "SELECT id_forma, nombre FROM forma_de_vida WHERE id_forma = '$IDU'";
            
            $result = mysqli_query($conexion,$sql);
            $ver = mysqli_fetch_row($result);
            
            $datos = array(
                'id_forma' => $ver[0], 
                'nombre' => $ver[1]
            );
            
            return $datos;  
        }
        
        public function actualizar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "UPDATE forma_de_vida SET nombre = '$datos[1]' WHERE id_forma = '$datos[0]'";
                
            return mysqli_query($conexion,$sql);
        }
        
        public function eliminar($id){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "DELETE FROM forma_de_vida WHERE id_forma = '$id'";
            
            return mysqli_query($conexion,$sql);
        }
    }
?>