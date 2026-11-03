<?php
require_once __DIR__ . '/../Model/User.php';


class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function index()
    {
        $users = $this->model->getAll();
        require_once __DIR__ . '/../View/home.php';
    }

    // public function listAll(){
    //     $users = $this->model->getAll();
    // }

    public function createUser()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];

            if ($this->model->create($name, $email)) {
                header("Location: index.php");
                exit;
            } else {
                $error = "Este e-mail já está cadastrado.";
            }
        }

        require_once __DIR__ . '/../View/create_user.php';
    }

    public function editUser()
    {
        $id = $_GET['id'];
        $data = $this->model->getById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];

            if ($this->model->update($id, $name, $email)) {
                header("Location: index.php");
                exit;
            } else {
                echo "Erro ao atualizar usuário.";
            }
        }
        require_once __DIR__ . '/../View/edit_user.php';
    }

    public function deleteUser()
    {
        $id = $_GET['id'];

        if ($this->model->delete($id)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Erro ao excluir usuário.";
        }
    }
}
