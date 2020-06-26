<?php
    class crud{
        public function agregar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();

            $sql = "INSERT INTO lugar_campus (id_lugar_campus, nombre_lugar ) VALUES ('$datos[0]','$datos[1]')";
            
            return mysqli_query($conexion,$sql);
        }
        
        public function obtenDatos($IDU){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            
            $sql = "SELECT id_lugar_campus, nombre_lugar FROM lugar_campus WHERE id_lugar_campus = '$IDU'";
            
            $result = mysqli_query($conexion,$sql);
            $ver = mysqli_fetch_row($result);
            
            $datos = array(
                'id_lugar_campus' => $ver[0], 
                'nombre_lugar' => $ver[1]
            );
            
            return $datos;  
        }
        
        public function actualizar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "UPDATE lugar_campus SET nombre_lugar = '$datos[1]' WHERE id_lugar_campus = '$datos[0]'";
                
            return mysqli_query($conexion,$sql);
        }
        
        public function eliminar($id){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "DELETE FROM lugar_campus WHERE id_lugar_campus = '$id'";
            
            return mysqli_query($conexion,$sql);
        }
    }
?>