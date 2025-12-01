<?php
require_once "config/database.php";
require_once "model/Lagu.php";

class LaguController {

    private $model;

    public function __construct() {
        $db = new Database();
        $this->model = new Lagu($db->getConnection());
    }

    public function index() {
        $lagu = $this->model->getAll();
        $data['lagu'] = $lagu; // FIX
        include "view/lagu_list.php";
    }

    public function tambah() {
        include "view/lagu_tambah.php";
    }

    public function simpan() {
        $this->model->tambah($_POST['judul'], $_POST['penyanyi'], $_POST['genre'], $_POST['tahun']);
        header("Location: index.php");
    }

    public function edit($id) {
        $data['lagu'] = $this->model->getById($id); // FIX
        include "view/lagu_edit.php";
    }

    public function update($id) {
        $this->model->update($id, $_POST['judul'], $_POST['penyanyi'], $_POST['genre'], $_POST['tahun']);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}
