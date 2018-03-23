<?php



/**
 * Session
 */
class Session
{
    /**
     * @var int
     */
    private $idSession;

    /**
     * @var int
     */
    private $idProfesseur;

    /**
     * @var int
     */
    private $idCours;

    /**
     * @var string
     */
    private $compteRendu;

    /**
     * @var string
     */
    private $nom;


    /**
     * Get idSession.
     *
     * @return int
     */
    public function getIdSession()
    {
        return $this->idSession;
    }

    /**
     * Set idProfesseur.
     *
     * @param int $idProfesseur
     *
     * @return Session
     */
    public function setIdProfesseur($idProfesseur)
    {
        $this->idProfesseur = $idProfesseur;

        return $this;
    }

    /**
     * Get idProfesseur.
     *
     * @return int
     */
    public function getIdProfesseur()
    {
        return $this->idProfesseur;
    }

    /**
     * Set idCours.
     *
     * @param int $idCours
     *
     * @return Session
     */
    public function setIdCours($idCours)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get idCours.
     *
     * @return int
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * Set compteRendu.
     *
     * @param string $compteRendu
     *
     * @return Session
     */
    public function setCompteRendu($compteRendu)
    {
        $this->compteRendu = $compteRendu;

        return $this;
    }

    /**
     * Get compteRendu.
     *
     * @return string
     */
    public function getCompteRendu()
    {
        return $this->compteRendu;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Session
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * @var int
     */
    private $idSeance;


    /**
     * Set idSeance.
     *
     * @param int $idSeance
     *
     * @return Session
     */
    public function setIdSeance($idSeance)
    {
        $this->idSeance = $idSeance;

        return $this;
    }

    /**
     * Get idSeance.
     *
     * @return int
     */
    public function getIdSeance()
    {
        return $this->idSeance;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $notes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * @var \professeur
     */
    private $professeur;

    /**
     * @var \seance
     */
    private $seance;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add note.
     *
     * @param \note $note
     *
     * @return Session
     */
    public function addNote(\note $note)
    {
        $this->notes[] = $note;

        return $this;
    }

    /**
     * Remove note.
     *
     * @param \note $note
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeNote(\note $note)
    {
        return $this->notes->removeElement($note);
    }

    /**
     * Get notes.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add reservation.
     *
     * @param \reservation $reservation
     *
     * @return Session
     */
    public function addReservation(\reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation.
     *
     * @param \reservation $reservation
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeReservation(\reservation $reservation)
    {
        return $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set professeur.
     *
     * @param \professeur|null $professeur
     *
     * @return Session
     */
    public function setProfesseur(\professeur $professeur = null)
    {
        $this->professeur = $professeur;

        return $this;
    }

    /**
     * Get professeur.
     *
     * @return \professeur|null
     */
    public function getProfesseur()
    {
        return $this->professeur;
    }

    /**
     * Set seance.
     *
     * @param \seance|null $seance
     *
     * @return Session
     */
    public function setSeance(\seance $seance = null)
    {
        $this->seance = $seance;

        return $this;
    }

    /**
     * Get seance.
     *
     * @return \seance|null
     */
    public function getSeance()
    {
        return $this->seance;
    }
}
