<?php

namespace Petrae\FichierPlanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Petrae\FichierPlanteBundle\Entity\Categorie;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Plante
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Petrae\FichierPlanteBundle\Entity\PlanteRepository")
 */
class Plante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NomLatin", type="string", length=255)
     */
    private $NomLatin;

    /**
     * @var string
     *
     * @ORM\Column(name="NomFrancais", type="string", length=255)
     */
    private $NomFrancais;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $Description;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=255, nullable=true)
     */
    private $Image;


    /**
     * @Assert\Type(type="Petrae\FichierPlanteBundle\Entity\Categorie")
     */
    protected $categorie;

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
     * Set NomLatin
     *
     * @param string $nomLatin
     * @return Plante
     */
    public function setNomLatin($nomLatin)
    {
        $this->NomLatin = $nomLatin;
    
        return $this;
    }

    /**
     * Get NomLatin
     *
     * @return string 
     */
    public function getNomLatin()
    {
        return $this->NomLatin;
    }

    /**
     * Set NomFrancais
     *
     * @param string $nomFrancais
     * @return Plante
     */
    public function setNomFrancais($nomFrancais)
    {
        $this->NomFrancais = $nomFrancais;
    
        return $this;
    }

    /**
     * Get NomFrancais
     *
     * @return string 
     */
    public function getNomFrancais()
    {
        return $this->NomFrancais;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return Plante
     */
    public function setDescription($description)
    {
        $this->Description = $description;
    
        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set Image
     *
     * @param string $image
     * @return Plante
     */
    public function setImage($image)
    {
        $this->Image = $image;
        return $this;
    }

    /**
     * Get Image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->Image;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie(Categorie $category = null)
    {
        $this->categorie = $category;
    }
}
