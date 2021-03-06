<?php

namespace HEI\MargeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chantier
 *
 * @ORM\Table(name="chantier")
 * @ORM\Entity(repositoryClass="HEI\MargeBundle\Repository\ChantierRepository")
 */
class Chantier
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
     * @ORM\ManyToOne(targetEntity="HEI\ContactBundle\Entity\Contact")
     * @ORM\JoinColumn(nullable=false)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="typeChantier", type="string", length=15)
     */
    private $typeChantier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="prixVente", type="integer")
     */
    private $prixVente;

    /**
     * @ORM\ManyToOne(targetEntity="HEI\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commercial;

    /**
     * @var int
     *
     * @ORM\Column(name="montantCommission", type="integer")
     */
    private $montantCommission;

    /**
     * @var int
     *
     * @ORM\Column(name="commissionSupplementaire", type="integer", nullable=true)
     */
    private $commissionSupplementaire;

    /**
     * @var int
     *
     * @ORM\Column(name="montantCommissionSuplementaire", type="integer", nullable=true)
     */
    private $montantCommissionSuplementaire;

    /**
     * @var string
     *
     * @ORM\Column(name="equipe", type="string", length=50)
     */
    private $equipe;

    /**
     * @var int
     *
     * @ORM\Column(name="jourPrevuCharpente", type="integer")
     */
    private $jourPrevuCharpente;

    /**
     * @var int
     *
     * @ORM\Column(name="montantPrevuCharpente", type="integer")
     */
    private $montantPrevuCharpente;

    /**
     * @var int
     *
     * @ORM\Column(name="jourReelCharpente", type="integer")
     */
    private $jourReelCharpente;

    /**
     * @var int
     *
     * @ORM\Column(name="montantReelCharpente", type="integer")
     */
    private $montantReelCharpente;

    /**
     * @var int
     *
     * @ORM\Column(name="jourPrevuFinitions", type="integer")
     */
    private $jourPrevuFinitions;

    /**
     * @var int
     *
     * @ORM\Column(name="montantPrevuFinitions", type="integer")
     */
    private $montantPrevuFinitions;

    /**
     * @var int
     *
     * @ORM\Column(name="jourReelFinitions", type="integer")
     */
    private $jourReelFinitions;

    /**
     * @var int
     *
     * @ORM\Column(name="montantReelFinitions", type="integer")
     */
    private $montantReelFinitions;

    /**
     * @var int
     *
     * @ORM\Column(name="forfaitPrevuCharpente", type="integer")
     */
    private $forfaitPrevuCharpente;

    /**
     * @var int
     *
     * @ORM\Column(name="montantForfaitPrevuCharpente", type="integer")
     */
    private $montantForfaitPrevuCharpente;

    /**
     * @var int
     *
     * @ORM\Column(name="forfaitReelCharpente", type="integer")
     */
    private $forfaitReelCharpente;

    /**
     * @var int
     *
     * @ORM\Column(name="montantForfaitReelCharpente", type="integer")
     */
    private $montantForfaitReelCharpente;

    /**
     * @var int
     *
     * @ORM\Column(name="boisVeluxPrevu", type="integer")
     */
    private $boisVeluxPrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="boisVeluxReel", type="integer")
     */
    private $boisVeluxReel;

    /**
     * @var int
     *
     * @ORM\Column(name="forfaitPrevuIsolation", type="integer")
     */
    private $forfaitPrevuIsolation;

    /**
     * @var int
     *
     * @ORM\Column(name="montantForfaitPrevuIsolation", type="integer")
     */
    private $montantForfaitPrevuIsolation;

    /**
     * @var int
     *
     * @ORM\Column(name="forfaitReelIsolation", type="integer")
     */
    private $forfaitReelIsolation;

    /**
     * @var int
     *
     * @ORM\Column(name="montantForfaitReelIsolation", type="integer")
     */
    private $montantForfaitReelIsolation;

    /**
     * @var int
     *
     * @ORM\Column(name="escalier", type="integer")
     */
    private $escalier;

    /**
     * @var int
     *
     * @ORM\Column(name="escalierReel", type="integer")
     */
    private $escalierReel;

    /**
     * @var int
     *
     * @ORM\Column(name="electricitePrevu", type="integer")
     */
    private $electricitePrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="electriciteReel", type="integer")
     */
    private $electriciteReel;

    /**
     * @var int
     *
     * @ORM\Column(name="isolationPrevu", type="integer")
     */
    private $isolationPrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="isolationReel", type="integer")
     */
    private $isolationReel;

    /**
     * @var int
     *
     * @ORM\Column(name="veluxEtAccesPrevu", type="integer")
     */
    private $veluxEtAccesPrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="veluxEtAccesReel", type="integer")
     */
    private $veluxEtAccesReel;

    /**
     * @var int
     *
     * @ORM\Column(name="plancherPrevu", type="integer")
     */
    private $plancherPrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="plancherReel", type="integer")
     */
    private $plancherReel;

    /**
     * @var int
     *
     * @ORM\Column(name="placardPrevu", type="integer")
     */
    private $placardPrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="placardReel", type="integer")
     */
    private $placardReel;

    /**
     * @var int
     *
     * @ORM\Column(name="plomberiePrevu", type="integer")
     */
    private $plomberiePrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="plomberieReel", type="integer")
     */
    private $plomberieReel;

    /**
     * @var int
     *
     * @ORM\Column(name="parquetPrevu", type="integer")
     */
    private $parquetPrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="parquetReel", type="integer")
     */
    private $parquetReel;

    /**
     * @var int
     *
     * @ORM\Column(name="peinturePrevu", type="integer")
     */
    private $peinturePrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="peintureReel", type="integer")
     */
    private $peintureReel;

    /**
     * @var int
     *
     * @ORM\Column(name="portePrevu", type="integer")
     */
    private $portePrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="porteReel", type="integer")
     */
    private $porteReel;

    /**
     * @var int
     *
     * @ORM\Column(name="bennePrevu", type="integer")
     */
    private $bennePrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="benneReel", type="integer")
     */
    private $benneReel;

    /**
     * @ORM\OneToMany(targetEntity="HEI\MargeBundle\Entity\ChampSupp", mappedBy="chantier")
     */
    private $champSupps;

    /**
     * @var int
     *
     * @ORM\Column(name="totalCoutsPrevu", type="integer")
     */
    private $totalCoutsPrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="totalCoutsReel", type="integer")
     */
    private $totalCoutsReel;

    /**
     * @var int
     *
     * @ORM\Column(name="margeEnValeurPrevu", type="integer")
     */
    private $margeEnValeurPrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="margeEnValeurReel", type="integer")
     */
    private $margeEnValeurReel;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentageMargePrevu", type="decimal", precision=10, scale=0)
     */
    private $pourcentageMargePrevu;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentageMargeReel", type="decimal", precision=10, scale=0)
     */
    private $pourcentageMargeReel;

    /**
     * @var string
     *
     * @ORM\Column(name="margeJourPrevu", type="decimal", precision=10, scale=0)
     */
    private $margeJourPrevu;

    /**
     * @var string
     *
     * @ORM\Column(name="margeJourReel", type="decimal", precision=10, scale=0)
     */
    private $margeJourReel;


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
     * Set typeChantier
     *
     * @param string $typeChantier
     *
     * @return Chantier
     */
    public function setTypeChantier($typeChantier)
    {
        $this->typeChantier = $typeChantier;

        return $this;
    }

    /**
     * Get typeChantier
     *
     * @return string
     */
    public function getTypeChantier()
    {
        return $this->typeChantier;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Chantier
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Chantier
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set prixVente
     *
     * @param integer $prixVente
     *
     * @return Chantier
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    /**
     * Get prixVente
     *
     * @return int
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * Set montantCommission
     *
     * @param integer $montantCommission
     *
     * @return Chantier
     */
    public function setMontantCommission($montantCommission)
    {
        $this->montantCommission = $montantCommission;

        return $this;
    }

    /**
     * Get montantCommission
     *
     * @return int
     */
    public function getMontantCommission()
    {
        return $this->montantCommission;
    }

    /**
     * Set commissionSupplementaire
     *
     * @param integer $commissionSupplementaire
     *
     * @return Chantier
     */
    public function setCommissionSupplementaire($commissionSupplementaire)
    {
        $this->commissionSupplementaire = $commissionSupplementaire;

        return $this;
    }

    /**
     * Get commissionSupplementaire
     *
     * @return int
     */
    public function getCommissionSupplementaire()
    {
        return $this->commissionSupplementaire;
    }

    /**
     * Set montantCommissionSuplementaire
     *
     * @param integer $montantCommissionSuplementaire
     *
     * @return Chantier
     */
    public function setMontantCommissionSuplementaire($montantCommissionSuplementaire)
    {
        $this->montantCommissionSuplementaire = $montantCommissionSuplementaire;

        return $this;
    }

    /**
     * Get montantCommissionSuplementaire
     *
     * @return int
     */
    public function getMontantCommissionSuplementaire()
    {
        return $this->montantCommissionSuplementaire;
    }

    /**
     * Set equipe
     *
     * @param string $equipe
     *
     * @return Chantier
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return string
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set jourPrevuCharpente
     *
     * @param integer $jourPrevuCharpente
     *
     * @return Chantier
     */
    public function setJourPrevuCharpente($jourPrevuCharpente)
    {
        $this->jourPrevuCharpente = $jourPrevuCharpente;

        return $this;
    }

    /**
     * Get jourPrevuCharpente
     *
     * @return int
     */
    public function getJourPrevuCharpente()
    {
        return $this->jourPrevuCharpente;
    }

    /**
     * Set montantPrevuCharpente
     *
     * @param integer $montantPrevuCharpente
     *
     * @return Chantier
     */
    public function setMontantPrevuCharpente($montantPrevuCharpente)
    {
        $this->montantPrevuCharpente = $montantPrevuCharpente;

        return $this;
    }

    /**
     * Get montantPrevuCharpente
     *
     * @return int
     */
    public function getMontantPrevuCharpente()
    {
        return $this->montantPrevuCharpente;
    }

    /**
     * Set jourReelCharpente
     *
     * @param integer $jourReelCharpente
     *
     * @return Chantier
     */
    public function setJourReelCharpente($jourReelCharpente)
    {
        $this->jourReelCharpente = $jourReelCharpente;

        return $this;
    }

    /**
     * Get jourReelCharpente
     *
     * @return int
     */
    public function getJourReelCharpente()
    {
        return $this->jourReelCharpente;
    }

    /**
     * Set montantReelCharpente
     *
     * @param integer $montantReelCharpente
     *
     * @return Chantier
     */
    public function setMontantReelCharpente($montantReelCharpente)
    {
        $this->montantReelCharpente = $montantReelCharpente;

        return $this;
    }

    /**
     * Get montantReelCharpente
     *
     * @return int
     */
    public function getMontantReelCharpente()
    {
        return $this->montantReelCharpente;
    }

    /**
     * Set jourPrevuFinitions
     *
     * @param integer $jourPrevuFinitions
     *
     * @return Chantier
     */
    public function setJourPrevuFinitions($jourPrevuFinitions)
    {
        $this->jourPrevuFinitions = $jourPrevuFinitions;

        return $this;
    }

    /**
     * Get jourPrevuFinitions
     *
     * @return int
     */
    public function getJourPrevuFinitions()
    {
        return $this->jourPrevuFinitions;
    }

    /**
     * Set montantPrevuFinitions
     *
     * @param integer $montantPrevuFinitions
     *
     * @return Chantier
     */
    public function setMontantPrevuFinitions($montantPrevuFinitions)
    {
        $this->montantPrevuFinitions = $montantPrevuFinitions;

        return $this;
    }

    /**
     * Get montantPrevuFinitions
     *
     * @return int
     */
    public function getMontantPrevuFinitions()
    {
        return $this->montantPrevuFinitions;
    }

    /**
     * Set jourReelFinitions
     *
     * @param integer $jourReelFinitions
     *
     * @return Chantier
     */
    public function setJourReelFinitions($jourReelFinitions)
    {
        $this->jourReelFinitions = $jourReelFinitions;

        return $this;
    }

    /**
     * Get jourReelFinitions
     *
     * @return int
     */
    public function getJourReelFinitions()
    {
        return $this->jourReelFinitions;
    }

    /**
     * Set montantReelFinitions
     *
     * @param integer $montantReelFinitions
     *
     * @return Chantier
     */
    public function setMontantReelFinitions($montantReelFinitions)
    {
        $this->montantReelFinitions = $montantReelFinitions;

        return $this;
    }

    /**
     * Get montantReelFinitions
     *
     * @return int
     */
    public function getMontantReelFinitions()
    {
        return $this->montantReelFinitions;
    }

    /**
     * Set forfaitPrevuCharpente
     *
     * @param integer $forfaitPrevuCharpente
     *
     * @return Chantier
     */
    public function setForfaitPrevuCharpente($forfaitPrevuCharpente)
    {
        $this->forfaitPrevuCharpente = $forfaitPrevuCharpente;

        return $this;
    }

    /**
     * Get forfaitPrevuCharpente
     *
     * @return int
     */
    public function getForfaitPrevuCharpente()
    {
        return $this->forfaitPrevuCharpente;
    }

    /**
     * Set montantForfaitPrevuCharpente
     *
     * @param integer $montantForfaitPrevuCharpente
     *
     * @return Chantier
     */
    public function setMontantForfaitPrevuCharpente($montantForfaitPrevuCharpente)
    {
        $this->montantForfaitPrevuCharpente = $montantForfaitPrevuCharpente;

        return $this;
    }

    /**
     * Get montantForfaitPrevuCharpente
     *
     * @return int
     */
    public function getMontantForfaitPrevuCharpente()
    {
        return $this->montantForfaitPrevuCharpente;
    }

    /**
     * Set forfaitReelCharpente
     *
     * @param integer $forfaitReelCharpente
     *
     * @return Chantier
     */
    public function setForfaitReelCharpente($forfaitReelCharpente)
    {
        $this->forfaitReelCharpente = $forfaitReelCharpente;

        return $this;
    }

    /**
     * Get forfaitReelCharpente
     *
     * @return int
     */
    public function getForfaitReelCharpente()
    {
        return $this->forfaitReelCharpente;
    }

    /**
     * Set montantForfaitReelCharpente
     *
     * @param integer $montantForfaitReelCharpente
     *
     * @return Chantier
     */
    public function setMontantForfaitReelCharpente($montantForfaitReelCharpente)
    {
        $this->montantForfaitReelCharpente = $montantForfaitReelCharpente;

        return $this;
    }

    /**
     * Get montantForfaitReelCharpente
     *
     * @return int
     */
    public function getMontantForfaitReelCharpente()
    {
        return $this->montantForfaitReelCharpente;
    }

    /**
     * Set boisVeluxPrevu
     *
     * @param integer $boisVeluxPrevu
     *
     * @return Chantier
     */
    public function setBoisVeluxPrevu($boisVeluxPrevu)
    {
        $this->boisVeluxPrevu = $boisVeluxPrevu;

        return $this;
    }

    /**
     * Get boisVeluxPrevu
     *
     * @return int
     */
    public function getBoisVeluxPrevu()
    {
        return $this->boisVeluxPrevu;
    }

    /**
     * Set boisVeluxReel
     *
     * @param integer $boisVeluxReel
     *
     * @return Chantier
     */
    public function setBoisVeluxReel($boisVeluxReel)
    {
        $this->boisVeluxReel = $boisVeluxReel;

        return $this;
    }

    /**
     * Get boisVeluxReel
     *
     * @return int
     */
    public function getBoisVeluxReel()
    {
        return $this->boisVeluxReel;
    }

    /**
     * Set forfaitPrevuIsolation
     *
     * @param integer $forfaitPrevuIsolation
     *
     * @return Chantier
     */
    public function setForfaitPrevuIsolation($forfaitPrevuIsolation)
    {
        $this->forfaitPrevuIsolation = $forfaitPrevuIsolation;

        return $this;
    }

    /**
     * Get forfaitPrevuIsolation
     *
     * @return int
     */
    public function getForfaitPrevuIsolation()
    {
        return $this->forfaitPrevuIsolation;
    }

    /**
     * Set montantForfaitPrevuIsolation
     *
     * @param integer $montantForfaitPrevuIsolation
     *
     * @return Chantier
     */
    public function setMontantForfaitPrevuIsolation($montantForfaitPrevuIsolation)
    {
        $this->montantForfaitPrevuIsolation = $montantForfaitPrevuIsolation;

        return $this;
    }

    /**
     * Get montantForfaitPrevuIsolation
     *
     * @return int
     */
    public function getMontantForfaitPrevuIsolation()
    {
        return $this->montantForfaitPrevuIsolation;
    }

    /**
     * Set forfaitReelIsolation
     *
     * @param integer $forfaitReelIsolation
     *
     * @return Chantier
     */
    public function setForfaitReelIsolation($forfaitReelIsolation)
    {
        $this->forfaitReelIsolation = $forfaitReelIsolation;

        return $this;
    }

    /**
     * Get forfaitReelIsolation
     *
     * @return int
     */
    public function getForfaitReelIsolation()
    {
        return $this->forfaitReelIsolation;
    }

    /**
     * Set montantForfaitReelIsolation
     *
     * @param integer $montantForfaitReelIsolation
     *
     * @return Chantier
     */
    public function setMontantForfaitReelIsolation($montantForfaitReelIsolation)
    {
        $this->montantForfaitReelIsolation = $montantForfaitReelIsolation;

        return $this;
    }

    /**
     * Get montantForfaitReelIsolation
     *
     * @return int
     */
    public function getMontantForfaitReelIsolation()
    {
        return $this->montantForfaitReelIsolation;
    }

    /**
     * Set escalier
     *
     * @param integer $escalier
     *
     * @return Chantier
     */
    public function setEscalier($escalier)
    {
        $this->escalier = $escalier;

        return $this;
    }

    /**
     * Get escalier
     *
     * @return int
     */
    public function getEscalier()
    {
        return $this->escalier;
    }

    /**
     * Set escalierReel
     *
     * @param integer $escalierReel
     *
     * @return Chantier
     */
    public function setEscalierReel($escalierReel)
    {
        $this->escalierReel = $escalierReel;

        return $this;
    }

    /**
     * Get escalierReel
     *
     * @return int
     */
    public function getEscalierReel()
    {
        return $this->escalierReel;
    }

    /**
     * Set electricitePrevu
     *
     * @param integer $electricitePrevu
     *
     * @return Chantier
     */
    public function setElectricitePrevu($electricitePrevu)
    {
        $this->electricitePrevu = $electricitePrevu;

        return $this;
    }

    /**
     * Get electricitePrevu
     *
     * @return int
     */
    public function getElectricitePrevu()
    {
        return $this->electricitePrevu;
    }

    /**
     * Set electriciteReel
     *
     * @param integer $electriciteReel
     *
     * @return Chantier
     */
    public function setElectriciteReel($electriciteReel)
    {
        $this->electriciteReel = $electriciteReel;

        return $this;
    }

    /**
     * Get electriciteReel
     *
     * @return int
     */
    public function getElectriciteReel()
    {
        return $this->electriciteReel;
    }

    /**
     * Set isolationPrevu
     *
     * @param integer $isolationPrevu
     *
     * @return Chantier
     */
    public function setIsolationPrevu($isolationPrevu)
    {
        $this->isolationPrevu = $isolationPrevu;

        return $this;
    }

    /**
     * Get isolationPrevu
     *
     * @return int
     */
    public function getIsolationPrevu()
    {
        return $this->isolationPrevu;
    }

    /**
     * Set isolationReel
     *
     * @param integer $isolationReel
     *
     * @return Chantier
     */
    public function setIsolationReel($isolationReel)
    {
        $this->isolationReel = $isolationReel;

        return $this;
    }

    /**
     * Get isolationReel
     *
     * @return int
     */
    public function getIsolationReel()
    {
        return $this->isolationReel;
    }

    /**
     * Set veluxEtAccesPrevu
     *
     * @param integer $veluxEtAccesPrevu
     *
     * @return Chantier
     */
    public function setVeluxEtAccesPrevu($veluxEtAccesPrevu)
    {
        $this->veluxEtAccesPrevu = $veluxEtAccesPrevu;

        return $this;
    }

    /**
     * Get veluxEtAccesPrevu
     *
     * @return int
     */
    public function getVeluxEtAccesPrevu()
    {
        return $this->veluxEtAccesPrevu;
    }

    /**
     * Set veluxEtAccesReel
     *
     * @param integer $veluxEtAccesReel
     *
     * @return Chantier
     */
    public function setVeluxEtAccesReel($veluxEtAccesReel)
    {
        $this->veluxEtAccesReel = $veluxEtAccesReel;

        return $this;
    }

    /**
     * Get veluxEtAccesReel
     *
     * @return int
     */
    public function getVeluxEtAccesReel()
    {
        return $this->veluxEtAccesReel;
    }

    /**
     * Set plancherPrevu
     *
     * @param integer $plancherPrevu
     *
     * @return Chantier
     */
    public function setPlancherPrevu($plancherPrevu)
    {
        $this->plancherPrevu = $plancherPrevu;

        return $this;
    }

    /**
     * Get plancherPrevu
     *
     * @return int
     */
    public function getPlancherPrevu()
    {
        return $this->plancherPrevu;
    }

    /**
     * Set plancherReel
     *
     * @param integer $plancherReel
     *
     * @return Chantier
     */
    public function setPlancherReel($plancherReel)
    {
        $this->plancherReel = $plancherReel;

        return $this;
    }

    /**
     * Get plancherReel
     *
     * @return int
     */
    public function getPlancherReel()
    {
        return $this->plancherReel;
    }

    /**
     * Set placardPrevu
     *
     * @param integer $placardPrevu
     *
     * @return Chantier
     */
    public function setPlacardPrevu($placardPrevu)
    {
        $this->placardPrevu = $placardPrevu;

        return $this;
    }

    /**
     * Get placardPrevu
     *
     * @return int
     */
    public function getPlacardPrevu()
    {
        return $this->placardPrevu;
    }

    /**
     * Set placardReel
     *
     * @param integer $placardReel
     *
     * @return Chantier
     */
    public function setPlacardReel($placardReel)
    {
        $this->placardReel = $placardReel;

        return $this;
    }

    /**
     * Get placardReel
     *
     * @return int
     */
    public function getPlacardReel()
    {
        return $this->placardReel;
    }

    /**
     * Set plomberiePrevu
     *
     * @param integer $plomberiePrevu
     *
     * @return Chantier
     */
    public function setPlomberiePrevu($plomberiePrevu)
    {
        $this->plomberiePrevu = $plomberiePrevu;

        return $this;
    }

    /**
     * Get plomberiePrevu
     *
     * @return int
     */
    public function getPlomberiePrevu()
    {
        return $this->plomberiePrevu;
    }

    /**
     * Set plomberieReel
     *
     * @param integer $plomberieReel
     *
     * @return Chantier
     */
    public function setPlomberieReel($plomberieReel)
    {
        $this->plomberieReel = $plomberieReel;

        return $this;
    }

    /**
     * Get plomberieReel
     *
     * @return int
     */
    public function getPlomberieReel()
    {
        return $this->plomberieReel;
    }

    /**
     * Set parquetPrevu
     *
     * @param integer $parquetPrevu
     *
     * @return Chantier
     */
    public function setParquetPrevu($parquetPrevu)
    {
        $this->parquetPrevu = $parquetPrevu;

        return $this;
    }

    /**
     * Get parquetPrevu
     *
     * @return int
     */
    public function getParquetPrevu()
    {
        return $this->parquetPrevu;
    }

    /**
     * Set parquetReel
     *
     * @param integer $parquetReel
     *
     * @return Chantier
     */
    public function setParquetReel($parquetReel)
    {
        $this->parquetReel = $parquetReel;

        return $this;
    }

    /**
     * Get parquetReel
     *
     * @return int
     */
    public function getParquetReel()
    {
        return $this->parquetReel;
    }

    /**
     * Set peinturePrevu
     *
     * @param integer $peinturePrevu
     *
     * @return Chantier
     */
    public function setPeinturePrevu($peinturePrevu)
    {
        $this->peinturePrevu = $peinturePrevu;

        return $this;
    }

    /**
     * Get peinturePrevu
     *
     * @return int
     */
    public function getPeinturePrevu()
    {
        return $this->peinturePrevu;
    }

    /**
     * Set peintureReel
     *
     * @param integer $peintureReel
     *
     * @return Chantier
     */
    public function setPeintureReel($peintureReel)
    {
        $this->peintureReel = $peintureReel;

        return $this;
    }

    /**
     * Get peintureReel
     *
     * @return int
     */
    public function getPeintureReel()
    {
        return $this->peintureReel;
    }

    /**
     * Set portePrevu
     *
     * @param integer $portePrevu
     *
     * @return Chantier
     */
    public function setPortePrevu($portePrevu)
    {
        $this->portePrevu = $portePrevu;

        return $this;
    }

    /**
     * Get portePrevu
     *
     * @return int
     */
    public function getPortePrevu()
    {
        return $this->portePrevu;
    }

    /**
     * Set porteReel
     *
     * @param integer $porteReel
     *
     * @return Chantier
     */
    public function setPorteReel($porteReel)
    {
        $this->porteReel = $porteReel;

        return $this;
    }

    /**
     * Get porteReel
     *
     * @return int
     */
    public function getPorteReel()
    {
        return $this->porteReel;
    }

    /**
     * Set totalCoutsPrevu
     *
     * @param integer $totalCoutsPrevu
     *
     * @return Chantier
     */
    public function setTotalCoutsPrevu($totalCoutsPrevu)
    {
        $this->totalCoutsPrevu = $totalCoutsPrevu;

        return $this;
    }

    /**
     * Get totalCoutsPrevu
     *
     * @return int
     */
    public function getTotalCoutsPrevu()
    {
        return $this->totalCoutsPrevu;
    }

    /**
     * Set totalCoutsReel
     *
     * @param integer $totalCoutsReel
     *
     * @return Chantier
     */
    public function setTotalCoutsReel($totalCoutsReel)
    {
        $this->totalCoutsReel = $totalCoutsReel;

        return $this;
    }

    /**
     * Get totalCoutsReel
     *
     * @return int
     */
    public function getTotalCoutsReel()
    {
        return $this->totalCoutsReel;
    }

    /**
     * Set margeEnValeurPrevu
     *
     * @param integer $margeEnValeurPrevu
     *
     * @return Chantier
     */
    public function setMargeEnValeurPrevu($margeEnValeurPrevu)
    {
        $this->margeEnValeurPrevu = $margeEnValeurPrevu;

        return $this;
    }

    /**
     * Get margeEnValeurPrevu
     *
     * @return int
     */
    public function getMargeEnValeurPrevu()
    {
        return $this->margeEnValeurPrevu;
    }

    /**
     * Set margeEnValeurReel
     *
     * @param integer $margeEnValeurReel
     *
     * @return Chantier
     */
    public function setMargeEnValeurReel($margeEnValeurReel)
    {
        $this->margeEnValeurReel = $margeEnValeurReel;

        return $this;
    }

    /**
     * Get margeEnValeurReel
     *
     * @return int
     */
    public function getMargeEnValeurReel()
    {
        return $this->margeEnValeurReel;
    }

    /**
     * Set pourcentageMargePrevu
     *
     * @param string $pourcentageMargePrevu
     *
     * @return Chantier
     */
    public function setPourcentageMargePrevu($pourcentageMargePrevu)
    {
        $this->pourcentageMargePrevu = $pourcentageMargePrevu;

        return $this;
    }

    /**
     * Get pourcentageMargePrevu
     *
     * @return string
     */
    public function getPourcentageMargePrevu()
    {
        return $this->pourcentageMargePrevu;
    }

    /**
     * Set pourcentageMargeReel
     *
     * @param string $pourcentageMargeReel
     *
     * @return Chantier
     */
    public function setPourcentageMargeReel($pourcentageMargeReel)
    {
        $this->pourcentageMargeReel = $pourcentageMargeReel;

        return $this;
    }

    /**
     * Get pourcentageMargeReel
     *
     * @return string
     */
    public function getPourcentageMargeReel()
    {
        return $this->pourcentageMargeReel;
    }

    /**
     * Set margeJourPrevu
     *
     * @param string $margeJourPrevu
     *
     * @return Chantier
     */
    public function setMargeJourPrevu($margeJourPrevu)
    {
        $this->margeJourPrevu = $margeJourPrevu;

        return $this;
    }

    /**
     * Get margeJourPrevu
     *
     * @return string
     */
    public function getMargeJourPrevu()
    {
        return $this->margeJourPrevu;
    }

    /**
     * Set margeJourReel
     *
     * @param string $margeJourReel
     *
     * @return Chantier
     */
    public function setMargeJourReel($margeJourReel)
    {
        $this->margeJourReel = $margeJourReel;

        return $this;
    }

    /**
     * Get margeJourReel
     *
     * @return string
     */
    public function getMargeJourReel()
    {
        return $this->margeJourReel;
    }

    /**
     * Set contact
     *
     * @param \HEI\ContactBundle\Entity\Contact $contact
     *
     * @return Chantier
     */
    public function setContact(\HEI\ContactBundle\Entity\Contact $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \HEI\ContactBundle\Entity\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set commercial
     *
     * @param \HEI\UserBundle\Entity\User $commercial
     *
     * @return Chantier
     */
    public function setCommercial(\HEI\UserBundle\Entity\User $commercial)
    {
        $this->commercial = $commercial;

        return $this;
    }

    /**
     * Get commercial
     *
     * @return \HEI\UserBundle\Entity\User
     */
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * Set bennePrevu
     *
     * @param integer $bennePrevu
     *
     * @return Chantier
     */
    public function setBennePrevu($bennePrevu)
    {
        $this->bennePrevu = $bennePrevu;

        return $this;
    }

    /**
     * Get bennePrevu
     *
     * @return integer
     */
    public function getBennePrevu()
    {
        return $this->bennePrevu;
    }

    /**
     * Set benneReel
     *
     * @param integer $benneReel
     *
     * @return Chantier
     */
    public function setBenneReel($benneReel)
    {
        $this->benneReel = $benneReel;

        return $this;
    }

    /**
     * Get benneReel
     *
     * @return integer
     */
    public function getBenneReel()
    {
        return $this->benneReel;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->champSupps = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add champSupp
     *
     * @param \HEI\MargeBundle\Entity\ChampSupp $champSupp
     *
     * @return Chantier
     */
    public function addChampSupp(\HEI\MargeBundle\Entity\ChampSupp $champSupp)
    {
        $this->champSupps[] = $champSupp;
        $champSupp->setChantier($this);

        return $this;
    }

    /**
     * Remove champSupp
     *
     * @param \HEI\MargeBundle\Entity\ChampSupp $champSupp
     */
    public function removeChampSupp(\HEI\MargeBundle\Entity\ChampSupp $champSupp)
    {
        $this->champSupps->removeElement($champSupp);
    }

    /**
     * Get champSupps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChampSupps()
    {
        return $this->champSupps;
    }
}
