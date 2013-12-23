<?php
/**
 * Created by PhpStorm.
 * User: nikon
 * Date: 21.12.13
 * Time: 14:12
 */

namespace NikonM\BlogBundle\Entity;


class Node {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \DateTime
     */
    private $publicationDate;

    /**
     * @var \NikonM\BlogBundle\Entity\User
     */
    private $author;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Node
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     * @return Node
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    
        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime 
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set author
     *
     * @param \NikonM\BlogBundle\Entity\User $author
     * @return Node
     */
    public function setAuthor(\NikonM\BlogBundle\Entity\User $author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \NikonM\BlogBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}