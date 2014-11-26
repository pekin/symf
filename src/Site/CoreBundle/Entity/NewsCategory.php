<?php

namespace Site\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsCategory
 */
class NewsCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $idNews;

    /**
     * @var string
     */
    private $idCategory;


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
     * Set idNews
     *
     * @param string $idNews
     * @return NewsCategory
     */
    public function setIdNews($idNews)
    {
        $this->idNews = $idNews;

        return $this;
    }

    /**
     * Get idNews
     *
     * @return string 
     */
    public function getIdNews()
    {
        return $this->idNews;
    }

    /**
     * Set idCategory
     *
     * @param string $idCategory
     * @return NewsCategory
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return string 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}
