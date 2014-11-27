<?php

namespace Site\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 */
class Tags
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * Set tags
     *
     * @param string $tags
     * @return Tags
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
