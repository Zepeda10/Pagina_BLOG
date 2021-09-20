<?php 


    class usuarios extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function agregar(){
            $this->views->getView($this,"panel_agregarUsuario");
        }

        public function add(){
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
            $id_rol = $_POST['id_rol'];
            $this->model->agregarUsuario( $usuario, $pass, $id_rol);

            header("Location: http://localhost/Pagina_BLOG/login/usuarios");
        }

        public function editar($id){
            $data = $this->model->getUsuario($id);
            $this->views->getView($this,"panel_editarUsuario",$data);
        }

        public function update(){
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
            $id_rol = $_POST['id_rol'];
            $id = $_POST['id'];
            $this->model->editarUsuario($usuario,$pass,$id_rol,$id);
            header("Location: http://localhost/Pagina_BLOG/login/usuarios");
        }

        public function eliminar($id){
            $this->model->eliminarUsuario($id);
            header("Location: http://localhost/Pagina_BLOG/login/usuarios");
        }

      


        
    }

?>