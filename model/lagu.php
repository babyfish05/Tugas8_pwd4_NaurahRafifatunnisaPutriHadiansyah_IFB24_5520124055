<?php
class Lagu {
    private $conn;
    private $table = "lagu";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // FIX
    }

    public function getById($id) {
        $query = "SELECT * FROM $this->table WHERE id = $id";
        $stmt = $this->conn->query($query);
        return $stmt->fetch(PDO::FETCH_ASSOC); // FIX
    }

    public function tambah($judul, $penyanyi, $genre, $tahun) {
        $query = "INSERT INTO $this->table (judul, penyanyi, genre, tahun_rilis)
                  VALUES ('$judul', '$penyanyi', '$genre', '$tahun')";
        return $this->conn->exec($query);
    }

    public function update($id, $judul, $penyanyi, $genre, $tahun) {
        $query = "UPDATE $this->table SET 
                    judul='$judul',
                    penyanyi='$penyanyi',
                    genre='$genre',
                    tahun_rilis='$tahun'
                  WHERE id=$id";
        return $this->conn->exec($query);
    }

    public function delete($id) {
        return $this->conn->exec("DELETE FROM $this->table WHERE id=$id");
    }
}
