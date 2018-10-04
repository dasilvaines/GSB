<?php

namespace GSB\VisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ligne_frais_hors_forfait
 *
 * @ORM\Table(name="ligne_frais_hors_forfait")
 * @ORM\Entity(repositoryClass="GSB\VisiteurBundle\Repository\ligne_frais_hors_forfaitRepository")
 */
class ligne_frais_hors_forfait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne (targetEntity="GSB\VisiteurBundle\Entity\fiche_frais")
     */
    private $ficheFrais ;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100)
     */
    private $libelle;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ligne_frais_hors_forfait
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return ligne_frais_hors_forfait
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return ligne_frais_hors_forfait
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set ficheFrais
     *
     * @param \GSB\VisiteurBundle\Entity\fiche_frais $ficheFrais
     *
     * @return ligne_frais_hors_forfait
     */
    public function setFicheFrais(\GSB\VisiteurBundle\Entity\fiche_frais $ficheFrais = null)
    {
        $this->ficheFrais = $ficheFrais;

        return $this;
    }

    /**
     * Get ficheFrais
     *
     * @return \GSB\VisiteurBundle\Entity\fiche_frais
     */
    public function getFicheFrais()
    {
        return $this->ficheFrais;
    }
}
