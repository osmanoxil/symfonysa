<?php
// src/OS/UserBundle/Entity/User.php

namespace OS\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="Level", type="integer",nullable=true)
     */
    protected $level;


    /**
     * @var int
     *
     * @ORM\Column(name="cash", type="integer",nullable=true)
     */
    protected $cash;
    /**
     * @var int
     *
     * @ORM\Column(name="Bankcash", type="integer",nullable=true)
     */
    protected $bankcash;

    /**
     * @var int
     *
     * @ORM\Column(name="Adminlevel", type="integer",nullable=true)
     */
    protected $adminlevel;

    /**
     * @var int
     *
     * @ORM\Column(name="Army", type="integer",nullable=true)
     */
    protected $army;

    /**
     * @var int
     *
     * @ORM\Column(name="CIA", type="integer",nullable=true)
     */
    protected $cIA;

    /**
     * @var int
     *
     * @ORM\Column(name="LRAID", type="integer",nullable=true)
     */
    protected $lRAID;

    /**
     * @var int
     *
     * @ORM\Column(name="CLRAID", type="integer",nullable=true)
     */
    protected $cLRAID;

    /**
     * @var int
     *
     * @ORM\Column(name="RAID", type="integer",nullable=true)
     */
    protected $rAID;

    /**
     * @var int
     *
     * @ORM\Column(name="LGROVE", type="integer",nullable=true)
     */
    protected $lGROVE;

    /**
     * @var int
     *
     * @ORM\Column(name="CLGROVE", type="integer",nullable=true)
     */
    protected $cLGROVE;

    /**
     * @var int
     *
     * @ORM\Column(name="GROVE", type="integer",nullable=true)
     */
    protected $gROVE;

    /**
     * @var int
     *
     * @ORM\Column(name="LBALLAS", type="integer",nullable=true)
     */
    protected $lBALLAS;

    /**
     * @var int
     *
     * @ORM\Column(name="CLBALLAS", type="integer",nullable=true)
     */
    protected $cLBALLAS;

    /**
     * @var int
     *
     * @ORM\Column(name="BALLAS", type="integer",nullable=true)
     */
    protected $bALLAS;

    /**
     * @var int
     *
     * @ORM\Column(name="RegularPlayer", type="integer",nullable=true)
     */
    protected $regularPlayer;

    /**
     * @var int
     *
     * @ORM\Column(name="Plevel", type="integer",nullable=true)
     */
    protected $vip;

    /**
     * @var int
     *
     * @ORM\Column(name="vip", type="integer",nullable=true)
     */
    protected $plevel;

    /**
     * @var int
     *
     * @ORM\Column(name="tlevel", type="integer",nullable=true)
     */
    protected $tlevel;

    /**
     * @var int
     *
     * @ORM\Column(name="vlevel", type="integer",nullable=true)
     */
    protected $vlevel;

    /**
     * @var int
     *
     * @ORM\Column(name="Actif", type="integer",nullable=true)
     */
    protected $actif;

    /**
     * @var int
     *
     * @ORM\Column(name="Solde", type="integer",nullable=true)
     */
    protected $solde;

    /**
     * @var int
     *
     * @ORM\Column(name="Vote", type="integer",nullable=true)
     */
    protected $vote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="VoteTime", type="integer",nullable=true)
     */
    protected $voteTime;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="VoteTimeRpg", type="integer",nullable=true)
     */
    protected $voteTimeRpg;

    /**
     * @var int
     *
     * @ORM\Column(name="locale", type="string", nullable=true)
     *
     */
    protected $locale;

    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }
    /**
     * Set level
     *
     * @param integer $level
     *
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set cash
     *
     * @param integer $cash
     *
     * @return User
     */
    public function setCash($cash)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Get cash
     *
     * @return integer
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Set bankcash
     *
     * @param integer $bankcash
     *
     * @return User
     */
    public function setBankcash($bankcash)
    {
        $this->bankcash = $bankcash;

        return $this;
    }

    /**
     * Get bankcash
     *
     * @return integer
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
     * @return User
     */
    public function setAdminlevel($adminlevel)
    {
        $this->adminlevel = $adminlevel;

        return $this;
    }

    /**
     * Get adminlevel
     *
     * @return integer
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
     * @return User
     */
    public function setArmy($army)
    {
        $this->army = $army;

        return $this;
    }

    /**
     * Get army
     *
     * @return integer
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
     * @return User
     */
    public function setCIA($cIA)
    {
        $this->cIA = $cIA;

        return $this;
    }

    /**
     * Get cIA
     *
     * @return integer
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
     * @return User
     */
    public function setLRAID($lRAID)
    {
        $this->lRAID = $lRAID;

        return $this;
    }

    /**
     * Get lRAID
     *
     * @return integer
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
     * @return User
     */
    public function setCLRAID($cLRAID)
    {
        $this->cLRAID = $cLRAID;

        return $this;
    }

    /**
     * Get cLRAID
     *
     * @return integer
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
     * @return User
     */
    public function setRAID($rAID)
    {
        $this->rAID = $rAID;

        return $this;
    }

    /**
     * Get rAID
     *
     * @return integer
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
     * @return User
     */
    public function setLGROVE($lGROVE)
    {
        $this->lGROVE = $lGROVE;

        return $this;
    }

    /**
     * Get lGROVE
     *
     * @return integer
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
     * @return User
     */
    public function setCLGROVE($cLGROVE)
    {
        $this->cLGROVE = $cLGROVE;

        return $this;
    }

    /**
     * Get cLGROVE
     *
     * @return integer
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
     * @return User
     */
    public function setGROVE($gROVE)
    {
        $this->gROVE = $gROVE;

        return $this;
    }

    /**
     * Get gROVE
     *
     * @return integer
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
     * @return User
     */
    public function setLBALLAS($lBALLAS)
    {
        $this->lBALLAS = $lBALLAS;

        return $this;
    }

    /**
     * Get lBALLAS
     *
     * @return integer
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
     * @return User
     */
    public function setCLBALLAS($cLBALLAS)
    {
        $this->cLBALLAS = $cLBALLAS;

        return $this;
    }

    /**
     * Get cLBALLAS
     *
     * @return integer
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
     * @return User
     */
    public function setBALLAS($bALLAS)
    {
        $this->bALLAS = $bALLAS;

        return $this;
    }

    /**
     * Get bALLAS
     *
     * @return integer
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
     * @return User
     */
    public function setRegularPlayer($regularPlayer)
    {
        $this->regularPlayer = $regularPlayer;

        return $this;
    }

    /**
     * Get regularPlayer
     *
     * @return integer
     */
    public function getRegularPlayer()
    {
        return $this->regularPlayer;
    }

    /**
     * Set vip
     *
     * @param integer $vip
     *
     * @return User
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return integer
     */
    public function getVip()
    {
        return $this->vip;
    }

    /**
     * Set plevel
     *
     * @param integer $plevel
     *
     * @return User
     */
    public function setPlevel($plevel)
    {
        $this->plevel = $plevel;

        return $this;
    }

    /**
     * Get plevel
     *
     * @return integer
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
     * @return User
     */
    public function setTlevel($tlevel)
    {
        $this->tlevel = $tlevel;

        return $this;
    }

    /**
     * Get tlevel
     *
     * @return integer
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
     * @return User
     */
    public function setVlevel($vlevel)
    {
        $this->vlevel = $vlevel;

        return $this;
    }

    /**
     * Get vlevel
     *
     * @return integer
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
     * @return User
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return integer
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
     * @return User
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return integer
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
     * @return User
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return integer
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
     * @return User
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
     * @return User
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

    /**
     * Set voteTimeRpg
     *
     * @param integer $voteTimeRpg
     *
     * @return User
     */
    public function setVoteTimeRpg($voteTimeRpg)
    {
        $this->voteTimeRpg = $voteTimeRpg;

        return $this;
    }

    /**
     * Get voteTimeRpg
     *
     * @return integer
     */
    public function getVoteTimeRpg()
    {
        return $this->voteTimeRpg;
    }
}
