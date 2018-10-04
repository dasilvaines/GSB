<?php

namespace GSB\VisiteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * fiche_frais
 *
 * @ORM\Table(name="fiche_frais")
 * @ORM\Entity(repositoryClass="GSB\VisiteurBundle\Repository\fiche_fraisRepository")
 */
class fiche_frais
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
     * @ORM\ManyToOne (targetEntity="GSB\VisiteurBundle\Entity\etat")
     */
    private $etat ;

    /**
     * @var int
     *
     * @ORM\Column(name="mois", type="integer")
     */
    private $mois;

    /**
     * @var int
     *
     * @ORM\ManyToOne (targetEntity="GSB\VisiteurBundle\Entity\visiteur")
     */
    private $idVisiteur;

    /**
     * @var int
     *
     * @ORM\Column(name="nbJustificatifs", type="integer")
     */
    private $nbJustificatifs;

    /**
     * @var float
     *
     * @ORM\Column(name="montantValide", type="float")
     */
    private $montantValide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNotif", type="date")
     */
    private $dateNotif;


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
     * Set mois
     *
     * @param integer $mois
     *
     * @return fiche_frais
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return int
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set idVisiteur
     *
     * @param integer $idVisiteur
     *
     * @return fiche_frais
     */
    public function setIdVisiteur($idVisiteur)
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    /**
     * Get idVisiteur
     *
     * @return int
     */
    public function getIdVisiteur()
    {
        return $this->idVisiteur;
    }

    /**
     * Set nbJustificatifs
     *
     * @param integer $nbJustificatifs
     *
     * @return fiche_frais
     */
    public function setNbJustificatifs($nbJustificatifs)
    {
        $this->nbJustificatifs = $nbJustificatifs;

        return $this;
    }

    /**
     * Get nbJustificatifs
     *
     * @return int
     */
    public function getNbJustificatifs()
    {
        return $this->nbJustificatifs;
    }

    /**
     * Set montantValide
     *
     * @param float $montantValide
     *
     * @return fiche_frais
     */
    public function setMontantValide($montantValide)
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    /**
     * Get montantValide
     *
     * @return float
     */
    public function getMontantValide()
    {
        return $this->montantValide;
    }

    /**
     * Set dateNotif
     *
     * @param \DateTime $dateNotif
     *
     * @return fiche_frais
     */
    public function setDateNotif($dateNotif)
    {
        $this->dateNotif = $dateNotif;

        return $this;
    }

    /**
     * Get dateNotif
     *
     * @return \DateTime
     */
    public function getDateNotif()
    {
        return $this->dateNotif;
    }

    /**
     * Set etat
     *
     * @param \GSB\VisiteurBundle\Entity\etat $etat
     *
     * @return fiche_frais
     */
    public function setEtat(\GSB\VisiteurBundle\Entity\etat $etat = null)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \GSB\VisiteurBundle\Entity\etat
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
