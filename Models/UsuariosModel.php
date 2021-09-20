<?php 

    class UsuariosModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }

        public function agregarUsuario(string $usuario,string $pass,int $id_rol){
            $query = "INSERT INTO usuarios (usuario,pass,id_rol) VALUES (?,?,?)";
            $arrData = array($usuario,$pass,$id_rol);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function eliminarUsuario(int $id){
            $query = "DELETE FROM usuarios WHERE id = ".$id;
            $request = $this->delete($query);

            return $request; 
        }

        public function getUsuario($id){
            $query = "SELECT * FROM usuarios WHERE id = $id";
            $request = $this->select($query);

            return $request;
        }

        public function editarUsuario(string $usuario,string $pass,int $id_rol, int $id){
            $query = "UPDATE usuarios SET usuario = '".$usuario."' , pass = '".$pass."' , id_rol = '".$id_rol."'WHERE id = $id";
            $request = $this->update($query);

            return $request;
        }
      


        
    }

?>