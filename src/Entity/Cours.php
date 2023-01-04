<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomCours;

    /**
     * @ORM\ManyToOne(targetEntity=Programe::class, inversedBy="cours")
     */
    private $programe;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCours(): ?string
    {
        return $this->nomCours;
    }

    public function setNomCours(string $nomCours): self
    {
        $this->nomCours = $nomCours;

        return $this;
    }

    public function getPrograme(): ?Programe
    {
        return $this->programe;
    }

    public function setPrograme(?Programe $programe): self
    {
        $this->programe = $programe;

        return $this;
    }


    public function __toString()
    {
       return $this ->id ." ".$this->nomCours ." ".$this->programe ;
    }

 
}
