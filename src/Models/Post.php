<?php
namespace Blog\Models;

class Post
{
    /** @var int */
    private $id;

    /** @var string */
    private $title;

    /** @var string */
    private $chapo;

    /** @var string */
    private $content;
    /** @var \DateTime */
    private $createdate;

    /** @var \DateTime */
    private $updatedate;

    /** @var \DateTime */
    private $publishdate;

    /** @var bool */
    private $published;

    private $createuser;
    private $updateuser;
    private $publishuser;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @return string
     */
    public function getChapo()
    {
        return $this->chapo;
    }



    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * @return \DateTime
     */
    public function getUpdatedate()
    {
        return $this->updatedate;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }


    /**
     * @return \DateTime
     */
    public function getPublishdate()
    {
        return $this->publishdate;
    }


    /**
     * @return bool
     */
    public function isPublished()
    {
        return $this->published;
    }



    /**
     * @return string
     */
    public function getCreateuser()
    {
        return $this->createuser;
    }


    /**
     * @return string
     */
    public function getUpdateuser()
    {
        return $this->updateuser;
    }


    /**
     * @return string
     */
    public function getPublishuser()
    {
        return $this->publishuser;
    }
}