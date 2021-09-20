<?php 

    class LoginModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }


        public function confirmaLogin(string $username, string $pass){
            $query = "SELECT * FROM usuarios WHERE usuario = '".$username."' AND pass= '".$pass."' ";
            $request = $this->select($query);

            return $request;
        }


        public function cerrarSesion(){
            session_start();
            session_destroy();
        }

        public function agregarPost(string $titulo, string $fecha,string $texto, int $categoria, string $imagen){
            $query = "INSERT INTO contenido (titulo,fecha,texto,id_categoria,imagen) VALUES (?,?,?,?,?)";
            $arrData = array($titulo,$fecha,$texto,$categoria,$imagen);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function getUsuarios(){
            $query = "SELECT u.id, u.usuario, u.pass, r.rol FROM usuarios u INNER JOIN roles r ON u.id_rol = r.id";
            $request = $this->select_all($query);

            return $request;
        }

        public function getPostsAdmin(){
            $query = "SELECT * FROM contenido";
            $request = $this->select_all($query);

            return $request;
        }

        public function getPosts(){
            $query = "SELECT c.titulo, c.fecha,c.texto, c.imagen, ca.categoria FROM contenido c INNER JOIN categorias ca ON c.id_categoria = ca.id";
            $request = $this->select_all($query);

            return $request;
        }

        public function getPost($id){
            $query = "SELECT * FROM contenido WHERE id = $id";
            $request = $this->select($query);

            return $request;
        }

        public function editarPost(string $titulo, string $fecha, string $texto,int $categoria,int $id){
            $query = "UPDATE contenido SET titulo = '".$titulo."' , fecha = '".$fecha."' , texto = '".$texto."' , id_categoria = $categoria WHERE id = $id";
            $request = $this->update($query);

            return $request;
        }

        public function deletePost(int $id){
            $query = "DELETE FROM contenido WHERE id = ".$id;
            $request = $this->delete($query);

            return $request; 
        }

        public function getRoles(){
            $query = "SELECT * FROM roles";
            $request = $this->select_all($query);

            return $request;
        }

        public function getCategorias(){
            $query = "SELECT * FROM categorias";
            $request = $this->select_all($query);

            return $request;
        }

        public function agregar_categoria(string $categoria){
            $query = "INSERT INTO categorias (categoria) VALUES (?)";
            $arrData = array($categoria);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function agregar_rol(string $rol){
            $query = "INSERT INTO roles (rol) VALUES (?)";
            $arrData = array($rol);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function eliminar_rol(int $id){
            $query = "DELETE FROM roles WHERE id = ".$id;
            $request = $this->delete($query);

            return $request; 
        }

        public function eliminar_categoria(int $id){
            $query = "DELETE FROM categorias WHERE id = ".$id;
            $request = $this->delete($query);

            return $request; 
        }

        public function getRol($id){
            $query = "SELECT * FROM roles WHERE id = $id";
            $request = $this->select($query);

            return $request;
        }


        public function getCategoria($id){
            $query = "SELECT * FROM categorias WHERE id = $id";
            $request = $this->select($query);

            return $request;
        }

        public function editar_rol(string $rol, int $id){
            $query = "UPDATE roles SET rol = '".$rol."' WHERE id = $id";
            $request = $this->update($query);

            return $request;
        }

        public function editar_categoria(string $categoria, int $id){
            $query = "UPDATE categorias SET categoria = '".$categoria."' WHERE id = $id";
            $request = $this->update($query);

            return $request;
        }


        
    }

?>