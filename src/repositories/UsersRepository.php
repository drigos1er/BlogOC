<?php


namespace Blog\repositories;


use Blog\authentification\StrFunct;

class UsersRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db=$db;
    }


    public function getUserByUsername($id)
    {

        $rec=$this->db->query("SELECT * FROM users WHERE username = ?",[$id]);


        $donnees = $rec->fetch(\PDO::FETCH_ASSOC);

        return $donnees;
    }

    public function register($username,$password,$email){

        $password=password_hash($password,PASSWORD_BCRYPT);
        $tkn=StrFunct::randomKey(50);

        $this->db->query("INSERT INTO users SET username=?,passwd=?,email=?,confirm_tkn=?",[$username,$password,$email,$tkn]);

        $userId=$this->db->lastInsertId();
        ini_set('SMTP','smtp.nomdomaine.com');
        ini_set('sendmail_from', 'drigos1er@yahoo.fr');

        mail($email,"CONFIRMATION MAIL","Cliquer sur ce lien (http://localhost/BLOGOCR/BLOGOC/confirm.php?userId=$userId&tkn=$tkn) pour activer votre compte");




    }




}