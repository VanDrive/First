<?php

class Article {

private $db_host = 'localhost';
private $db_name = 'postgres';
private $db_user = 'postgres';
private $db_password = 'root';
public $conn_string;

private function ConnectDb ()
{
    $conn_string = new PDO("pgsql:host=$this->db_host;port=5432;dbname=$this->db_name;user=$this->db_user;password=$this->db_password");
    return $conn_string;
}

public function CreateArticle ($name, $description, $created_at)
{
    $connect_db = $this->ConnectDb();
    $stmt = $connect_db->prepare("INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)");
    $stmt->bindValue(":name", $name);
    $stmt->bindValue(":created_at", $created_at);
    $stmt->bindValue(":description", $description);
    $stmt->execute();
}

public function ShowArticles()
{
    $connect_db = $this->ConnectDb();
    $sql = "SELECT * FROM article";
    $pdo_statement = $connect_db->prepare($sql);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    return $result;
}

public function UpdateArticle ($id, $name, $description, $created_at)
{
    $connect_db = $this->ConnectDb();
    $stmt = $connect_db->prepare("UPDATE article SET name=:name, description=:description, created_at=:created_at WHERE id=:id");
    $stmt->bindValue(":id", $id);
    $stmt->bindValue(":name", $name);
    $stmt->bindValue(":created_at", $created_at ? $created_at : date('Y-m-d H:i:s', time()));
    $stmt->bindValue(":description", $description);
    $result = $stmt->execute();
    return $result;
}

public function DeleteArticle($id)
    {
        $connect_db = $this->ConnectDb();
        $sql = "DELETE FROM article WHERE id=:id";
        $pdo_statement = $connect_db->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $result = $pdo_statement->execute();
        return $result;
    }

public function ShowById($id)
    {
        $connect_db = $this->ConnectDb();
        $pdo_statement = $connect_db->prepare('SELECT * FROM article WHERE id = :id');
        $pdo_statement->execute(array(':id' => $id));
        $result = $pdo_statement->fetch();
        return $result;
    }
}
