<?php
namespace Blog\Models;

class Users
{
    private $id;
    private $username;
    private $usertype;
    private $contact;
    private $email;
    private $passwd;
    private $confirmTkn;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return mixed
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * @return mixed
     */
    public function getConfirmTkn()
    {
        return $this->confirmTkn;
    }

}