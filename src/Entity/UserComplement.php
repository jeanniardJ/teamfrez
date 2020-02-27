<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserComplementRepository")
 */
class UserComplement
{

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=180, unique=true, nullable=true)
     */
    private $steam_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $steamPseudo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $battleTag;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $originPseudo;

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getSteamPseudo(): ?string
    {
        return $this->steamPseudo;
    }

    public function setSteamPseudo(string $steamPseudo): self
    {
        $this->steamPseudo = $steamPseudo;

        return $this;
    }

    public function getBattleTag(): ?string
    {
        return $this->battleTag;
    }

    public function setBattleTag(?string $battleTag): self
    {
        $this->battleTag = $battleTag;

        return $this;
    }

    public function getOriginPseudo(): ?string
    {
        return $this->originPseudo;
    }

    public function setOriginPseudo(?string $originPseudo): self
    {
        $this->originPseudo = $originPseudo;

        return $this;
    }
}
