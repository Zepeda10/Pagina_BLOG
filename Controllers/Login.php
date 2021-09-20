<?php 


    class login extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function inicio(){
            $this->views->getView($this,"login");
        }

        public function loguearse(){
            $username = $_POST['usuario'];
            $pass = $_POST['pass'];
            $rol = 0;

            $result = $this->model->confirmaLogin($username,$pass);

            if($result){
                session_start();
                $_SESSION['id_usuario'] = $result['id'];
                $_SESSION['usuario'] = $result['usuario'];
                $rol = $result['id_rol'];

                if($rol == 1){
                    header("Location: http://localhost/Pagina_BLOG/login/posts");

                }else if($rol == 2){
                    header("Location: http://localhost/Pagina_BLOG/login/blog");

                }
            
            }else{
                $this->views->getView($this,"Errors/NoLogin");
            }
        }

        public function cerrar(){
            $this->model->cerrarSesion();
            header("Location: ../");
        }

        public function posts(){
            $data = $this->model->getPostsAdmin();
            $this->views->getView($this,"panel",$data);
        }

        public function add(){
            $this->views->getView($this,"panel_agregarPost");
        }

        public function usuarios(){
            $data = $this->model->getUsuarios();
            $this->views->getView($this,"panel_usuarios",$data);
        }

        public function blog(){
            $data = $this->model->getPosts();
            $this->views->getView($this,"blog",$data);
        }

        public function agregar(){
            if(isset($_FILES['imagen']['name'])){

                $destinoRuta = "imagenes_subidas/";
                                                                                //el nombre de la img en la DB
                move_uploaded_file($_FILES['imagen']['tmp_name'], $destinoRuta.$_FILES['imagen']['name']);//mover archivo del directorio temporal a la carpeta imagenes

            }else{
                echo "El archivo no se ha podido copiar al directorio de imagen <br>";
            }


            $titulo = $_POST['titulo'];
            $fecha = $_POST['fecha'];
            $texto = $_POST['texto'];
            $categoria = $_POST['id_categoria'];
            $imagen = $_FILES['imagen']['name'];

            $this->model->agregarPost($titulo,$fecha,$texto,$categoria,$imagen);

            header("Location: http://localhost/Pagina_BLOG/login/posts");
        }

        public function editar($id){
            $data = $this->model->getPost($id);
            $this->views->getView($this,"panel_editarPost",$data);
        }

        public function update(){
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $fecha = $_POST['fecha'];
            $texto = $_POST['texto'];
            $categoria = $_POST['id_categoria'];
            $this->model->editarPost($titulo,$fecha,$texto,$categoria,$id);

            header("Location: http://localhost/Pagina_BLOG/login/posts");
        }

        public function eliminar($id){
            $this->model->deletePost($id);
            header("Location: http://localhost/Pagina_BLOG/login/posts");
        }

        public function roles(){
            $data = $this->model->getRoles();
            $this->views->getView($this,"panel_roles",$data);
        }

        public function categorias(){
            $data = $this->model->getCategorias();
            $this->views->getView($this,"panel_categorias",$data);
        }

        public function agregarRol(){
            $this->views->getView($this,"panel_agregarRol");
        }

        public function addRol(){
            $rol = $_POST['rol'];
            $this->model->agregar_rol($rol);
            header("Location: http://localhost/Pagina_BLOG/login/roles");
        }

        public function agregarCategoria(){
            $this->views->getView($this,"panel_agregarCategoria");
        }

        public function addCategoria(){
            $categoria = $_POST['categoria'];
            $this->model->agregar_categoria($categoria);
            header("Location: http://localhost/Pagina_BLOG/login/categorias");
        }


        public function eliminarRol($id){
            $this->model->eliminar_rol($id);
            header("Location: http://localhost/Pagina_BLOG/login/roles");
        }

        public function eliminarCategoria($id){
            $this->model->eliminar_categoria($id);
            header("Location: http://localhost/Pagina_BLOG/login/categorias");
        }

        public function editarRol($id){
            $data = $this->model->getRol($id);
            $this->views->getView($this,"panel_editarRol",$data);
        }

        public function editarCategoria($id){
            $data = $this->model->getCategoria($id);
            $this->views->getView($this,"panel_editarCategoria",$data);
        }

        public function updateRol(){
            $rol = $_POST['rol'];
            $id = $_POST['id'];
            $this->model->editar_rol($rol,$id);
            header("Location: http://localhost/Pagina_BLOG/login/roles");
        }

        public function updateCategoria(){
            $categoria = $_POST['categoria'];
            $id = $_POST['id'];
            $this->model->editar_categoria($categoria,$id);
            header("Location: http://localhost/Pagina_BLOG/login/categorias");
        }


        
    }

?>