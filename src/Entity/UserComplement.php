<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserComplementRepository")
 */
class UserComplement extends User
{
    /**
     * @ORM\Column(type="string", lenght=180, unique=true)
     */
    private $steam_id;
}
