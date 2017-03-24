<?php
// src/AppBundle/Entity/Group.php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_group")
 */
class Group extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;
	
	 
	 /**
 * toString
 * @return string
 */
public function __toString() 
{
    return $this->getName();
}
}