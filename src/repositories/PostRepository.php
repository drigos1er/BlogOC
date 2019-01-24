<?php
namespace Blog\repositories;

use Blog\authentification\StrFunct;

class PostRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db=$db;
    }

    public function addPost($title, $chapo, $content, $createdate, $createuser, $updatedate, $updateuser)
    {
        $this->db->query("INSERT INTO posts SET title=?, chapo=?, content=?, createdate=?, createuser=?, updatedate=?, updateuser=?", [$title, $chapo, $content, $createdate, $createuser,$updatedate, $updateuser]);
    }



    public function getallPost()
    {
        $sqlStmt = 'SELECT * FROM posts order by updatedate desc';
        $stmt = $this->db->query($sqlStmt);
        return $stmt->fetchAll(
            \PDO::FETCH_CLASS
        );
    }



}