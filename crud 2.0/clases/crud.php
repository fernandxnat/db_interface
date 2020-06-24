<?php
    class crud{
        public function agregar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();

            $sql = "INSERT INTO especie_sp (id_especie,nombre_comun,familia_especie,genero_especie,nombre_especie,id_forma,nom059,cites,iucn) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]')";
            
            return mysqli_query($conexion,$sql);
        }
        
        public function obtenDatos($IDU){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            
            $sql = "SELECT id_especie, nombre_comun, familia_especie, genero_especie, nombre_especie, id_forma, nom059, cites, iucn FROM especie_sp WHERE id_especie = '$IDU'";
            
            $result = mysqli_query($conexion,$sql);
            $ver = mysqli_fetch_row($result);
            
            $datos = array(
                'id_especie' => $ver[0], 
                'nombre_comun' => $ver[1], 
                'familia_especie' => $ver[2], 
                'genero_especie' => $ver[3], 
                'nombre_especie' => $ver[4], 
                'id_forma' => $ver[5], 
                'nom059' => $ver[6], 
                'cites' => $ver[7], 
                'iucn' => $ver[8]
            );
            
            return $datos;  
        }
        
        public function actualizar($datos){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "UPDATE especie_sp SET nombre_comun = '$datos[1]', familia_especie = '$datos[2]', genero_especie = '$datos[3]', nombre_especie = '$datos[4]', id_forma = '$datos[5]', nom059 = '$datos[6]', cites = '$datos[7]', iucn = '$datos[8]' WHERE id_especie = '$datos[0]'";
                
            return mysqli_query($conexion,$sql);
        }
        
        public function eliminar($id){
            $obj = new Conexion;
            $conexion = $obj->conectar();
            $sql = "DELETE FROM especie_sp WHERE id_especie = '$id'";
            
            return mysqli_query($conexion,$sql);
        }
    }
?>