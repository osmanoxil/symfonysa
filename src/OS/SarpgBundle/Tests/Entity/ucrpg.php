<?php

namespace OS\SarpgBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ucrpg
 *
 * @ORM\Table(name="ucrpg")
 * @ORM\Entity(repositoryClass="OS\SarpgBundle\Repository\ucrpgRepository")
 */
class ucrpg
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
     * @var int
     *
     * @ORM\Column(name="Level", type="integer")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="Bankcash", type="integer")
     */
    private $bankcash;

    /**
     * @var int
     *
     * @ORM\Column(name="Adminlevel", type="integer")
     */
    private $adminlevel;

    /**
     * @var int
     *
     * @ORM\Column(name="Army", type="integer")
     */
    private $army;

    /**
     * @var int
     *
     * @ORM\Column(name="CIA", type="integer")
     */
    private $cIA;

    /**
     * @var int
     *
     * @ORM\Column(name="LRAID", type="integer")
     */
    private $lRAID;

    /**
     * @var int
     *
     * @ORM\Column(name="CLRAID", type="integer")
     */
    private $cLRAID;

    /**
     * @var int
     *
     * @ORM\Column(name="RAID", type="integer")
     */
    private $rAID;

    /**
     * @var int
     *
     * @ORM\Column(name="LGROVE", type="integer")
     */
    private $lGROVE;

    /**
     * @var int
     *
     * @ORM\Column(name="CLGROVE", type="integer")
     */
    private $cLGROVE;

    /**
     * @var int
     *
     * @ORM\Column(name="GROVE", type="integer")
     */
    private $gROVE;

    /**
     * @var int
     *
     * @ORM\Column(name="LBALLAS", type="integer")
     */
    private $lBALLAS;

    /**
     * @var int
     *
     * @ORM\Column(name="CLBALLAS", type="integer")
     */
    private $cLBALLAS;

    /**
     * @var int
     *
     * @ORM\Column(name="BALLAS", type="integer")
     */
    private $bALLAS;

    /**
     * @var int
     *
     * @ORM\Column(name="RegularPlayer", type="integer")
     */
    private $regularPlayer;

    /**
     * @var int
     *
     * @ORM\Column(name="Plevel", type="integer")
     */
    private $plevel;

    /**
     * @var int
     *
     * @ORM\Column(name="tlevel", type="integer")
     */
    private $tlevel;

    /**
     * @var int
     *
     * @ORM\Column(name="vlevel", type="integer")
     */
    private $vlevel;

    /**
     * @var int
     *
     * @ORM\Column(name="Actif", type="integer")
     */
    private $actif;

    /**
     * @var int
     *
     * @ORM\Column(name="Solde", type="integer")
     */
    private $solde;

    /**
     * @var int
     *
     * @ORM\Column(name="Vote", type="integer")
     */
    private $vote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="VoteTime", type="datetime")
     */
    private $voteTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="VoteExpiration", type="datetime")
     */
    private $voteExpiration;


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
     * Set level
     *
     * @param integer $level
     *
     * @return ucrpg
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set bankcash
     *
     * @param integer $bankcash
     *
     * @return ucrpg
     */
    public function setBankcash($bankcash)
    {
        $this->bankcash = $bankcash;

        return $this;
    }

    /**
     * Get bankcash
     *
     * @return int
     */
    public function getBankcash()
    {
        return $this->bankcash;
    }

    /**
     * Set adminlevel
     *
     * @param integer $adminlevel
     *
     * @return ucrpg
     */
    public function setAdminlevel($adminlevel)
    {
        $this->adminlevel = $adminlevel;

        return $this;
    }

    /**
     * Get adminlevel
     *
     * @return int
     */
    public function getAdminlevel()
    {
        return $this->adminlevel;
    }

    /**
     * Set army
     *
     * @param integer $army
     *
     * @return ucrpg
     */
    public function setArmy($army)
    {
        $this->army = $army;

        return $this;
    }

    /**
     * Get army
     *
     * @return int
     */
    public function getArmy()
    {
        return $this->army;
    }

    /**
     * Set cIA
     *
     * @param integer $cIA
     *
     * @return ucrpg
     */
    public function setCIA($cIA)
    {
        $this->cIA = $cIA;

        return $this;
    }

    /**
     * Get cIA
     *
     * @return int
     */
    public function getCIA()
    {
        return $this->cIA;
    }

    /**
     * Set lRAID
     *
     * @param integer $lRAID
     *
     * @return ucrpg
     */
    public function setLRAID($lRAID)
    {
        $this->lRAID = $lRAID;

        return $this;
    }

    /**
     * Get lRAID
     *
     * @return int
     */
    public function getLRAID()
    {
        return $this->lRAID;
    }

    /**
     * Set cLRAID
     *
     * @param integer $cLRAID
     *
     * @return ucrpg
     */
    public function setCLRAID($cLRAID)
    {
        $this->cLRAID = $cLRAID;

        return $this;
    }

    /**
     * Get cLRAID
     *
     * @return int
     */
    public function getCLRAID()
    {
        return $this->cLRAID;
    }

    /**
     * Set rAID
     *
     * @param integer $rAID
     *
     * @return ucrpg
     */
    public function setRAID($rAID)
    {
        $this->rAID = $rAID;

        return $this;
    }

    /**
     * Get rAID
     *
     * @return int
     */
    public function getRAID()
    {
        return $this->rAID;
    }

    /**
     * Set lGROVE
     *
     * @param integer $lGROVE
     *
     * @return ucrpg
     */
    public function setLGROVE($lGROVE)
    {
        $this->lGROVE = $lGROVE;

        return $this;
    }

    /**
     * Get lGROVE
     *
     * @return int
     */
    public function getLGROVE()
    {
        return $this->lGROVE;
    }

    /**
     * Set cLGROVE
     *
     * @param integer $cLGROVE
     *
     * @return ucrpg
     */
    public function setCLGROVE($cLGROVE)
    {
        $this->cLGROVE = $cLGROVE;

        return $this;
    }

    /**
     * Get cLGROVE
     *
     * @return int
     */
    public function getCLGROVE()
    {
        return $this->cLGROVE;
    }

    /**
     * Set gROVE
     *
     * @param integer $gROVE
     *
     * @return ucrpg
     */
    public function setGROVE($gROVE)
    {
        $this->gROVE = $gROVE;

        return $this;
    }

    /**
     * Get gROVE
     *
     * @return int
     */
    public function getGROVE()
    {
        return $this->gROVE;
    }

    /**
     * Set lBALLAS
     *
     * @param integer $lBALLAS
     *
     * @return ucrpg
     */
    public function setLBALLAS($lBALLAS)
    {
        $this->lBALLAS = $lBALLAS;

        return $this;
    }

    /**
     * Get lBALLAS
     *
     * @return int
     */
    public function getLBALLAS()
    {
        return $this->lBALLAS;
    }

    /**
     * Set cLBALLAS
     *
     * @param integer $cLBALLAS
     *
     * @return ucrpg
     */
    public function setCLBALLAS($cLBALLAS)
    {
        $this->cLBALLAS = $cLBALLAS;

        return $this;
    }

    /**
     * Get cLBALLAS
     *
     * @return int
     */
    public function getCLBALLAS()
    {
        return $this->cLBALLAS;
    }

    /**
     * Set bALLAS
     *
     * @param integer $bALLAS
     *
     * @return ucrpg
     */
    public function setBALLAS($bALLAS)
    {
        $this->bALLAS = $bALLAS;

        return $this;
    }

    /**
     * Get bALLAS
     *
     * @return int
     */
    public function getBALLAS()
    {
        return $this->bALLAS;
    }

    /**
     * Set regularPlayer
     *
     * @param integer $regularPlayer
     *
     * @return ucrpg
     */
    public function setRegularPlayer($regularPlayer)
    {
        $this->regularPlayer = $regularPlayer;

        return $this;
    }

    /**
     * Get regularPlayer
     *
     * @return int
     */
    public function getRegularPlayer()
    {
        return $this->regularPlayer;
    }

    /**
     * Set plevel
     *
     * @param integer $plevel
     *
     * @return ucrpg
     */
    public function setPlevel($plevel)
    {
        $this->plevel = $plevel;

        return $this;
    }

    /**
     * Get plevel
     *
     * @return int
     */
    public function getPlevel()
    {
        return $this->plevel;
    }

    /**
     * Set tlevel
     *
     * @param integer $tlevel
     *
     * @return ucrpg
     */
    public function setTlevel($tlevel)
    {
        $this->tlevel = $tlevel;

        return $this;
    }

    /**
     * Get tlevel
     *
     * @return int
     */
    public function getTlevel()
    {
        return $this->tlevel;
    }

    /**
     * Set vlevel
     *
     * @param integer $vlevel
     *
     * @return ucrpg
     */
    public function setVlevel($vlevel)
    {
        $this->vlevel = $vlevel;

        return $this;
    }

    /**
     * Get vlevel
     *
     * @return int
     */
    public function getVlevel()
    {
        return $this->vlevel;
    }

    /**
     * Set actif
     *
     * @param integer $actif
     *
     * @return ucrpg
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return int
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set solde
     *
     * @param integer $solde
     *
     * @return ucrpg
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return int
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set vote
     *
     * @param integer $vote
     *
     * @return ucrpg
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set voteTime
     *
     * @param \DateTime $voteTime
     *
     * @return ucrpg
     */
    public function setVoteTime($voteTime)
    {
        $this->voteTime = $voteTime;

        return $this;
    }

    /**
     * Get voteTime
     *
     * @return \DateTime
     */
    public function getVoteTime()
    {
        return $this->voteTime;
    }

    /**
     * Set voteExpiration
     *
     * @param \DateTime $voteExpiration
     *
     * @return ucrpg
     */
    public function setVoteExpiration($voteExpiration)
    {
        $this->voteExpiration = $voteExpiration;

        return $this;
    }

    /**
     * Get voteExpiration
     *
     * @return \DateTime
     */
    public function getVoteExpiration()
    {
        return $this->voteExpiration;
    }
}

