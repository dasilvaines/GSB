<?php

namespace GSB\VisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ligne_frais_forfait
 *
 * @ORM\Table(name="ligne_frais_forfait")
 * @ORM\Entity(repositoryClass="GSB\VisiteurBundle\Repository\ligne_frais_forfaitRepository")
 */
class ligne_frais_forfait
{

   /**
    * @ORM\ManyToOne (targetEntity="GSB\VisiteurBundle\Entity\frais_forfait")
    */
   private $ficheFrais ;

    /**
     * @ORM\ManyToOne (targetEntity="GSB\VisiteurBundle\Entity\fiche_frais")
     */
    private $fraisForfais ;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return ligne_frais_forfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set ficheFrais
     *
     * @param \GSB\VisiteurBundle\Entity\frais_forfait $ficheFrais
     *
     * @return ligne_frais_forfait
     */
    public function setFicheFrais(\GSB\VisiteurBundle\Entity\frais_forfait $ficheFrais = null)
    {
        $this->ficheFrais = $ficheFrais;

        return $this;
    }

    /**
     * Get ficheFrais
     *
     * @return \GSB\VisiteurBundle\Entity\frais_forfait
     */
    public function getFicheFrais()
    {
        return $this->ficheFrais;
    }

    /**
     * Set fraisForfais
     *
     * @param \GSB\VisiteurBundle\Entity\fiche_frais $fraisForfais
     *
     * @return ligne_frais_forfait
     */
    public function setFraisForfais(\GSB\VisiteurBundle\Entity\fiche_frais $fraisForfais = null)
    {
        $this->fraisForfais = $fraisForfais;

        return $this;
    }

    /**
     * Get fraisForfais
     *
     * @return \GSB\VisiteurBundle\Entity\fiche_frais
     */
    public function getFraisForfais()
    {
        return $this->fraisForfais;
    }
}
