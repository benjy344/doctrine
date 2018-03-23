<?php



/**
 * Reservation
 */
class Reservation
{
    /**
     * @var int
     */
    private $idReservation;

    /**
     * @var int
     */
    private $idCreneau;

    /**
     * @var int
     */
    private $idSalle;

    /**
     * @var int
     */
    private $idSession;


    /**
     * Get idReservation.
     *
     * @return int
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * Set idCreneau.
     *
     * @param int $idCreneau
     *
     * @return Reservation
     */
    public function setIdCreneau($idCreneau)
    {
        $this->idCreneau = $idCreneau;

        return $this;
    }

    /**
     * Get idCreneau.
     *
     * @return int
     */
    public function getIdCreneau()
    {
        return $this->idCreneau;
    }

    /**
     * Set idSalle.
     *
     * @param int $idSalle
     *
     * @return Reservation
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;

        return $this;
    }

    /**
     * Get idSalle.
     *
     * @return int
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * Set idSession.
     *
     * @param int $idSession
     *
     * @return Reservation
     */
    public function setIdSession($idSession)
    {
        $this->idSession = $idSession;

        return $this;
    }

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
     * @var \creneau
     */
    private $creneau;

    /**
     * @var \salle
     */
    private $salle;

    /**
     * @var \session
     */
    private $session;


    /**
     * Set creneau.
     *
     * @param \creneau|null $creneau
     *
     * @return Reservation
     */
    public function setCreneau(\creneau $creneau = null)
    {
        $this->creneau = $creneau;

        return $this;
    }

    /**
     * Get creneau.
     *
     * @return \creneau|null
     */
    public function getCreneau()
    {
        return $this->creneau;
    }

    /**
     * Set salle.
     *
     * @param \salle|null $salle
     *
     * @return Reservation
     */
    public function setSalle(\salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle.
     *
     * @return \salle|null
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set session.
     *
     * @param \session|null $session
     *
     * @return Reservation
     */
    public function setSession(\session $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session.
     *
     * @return \session|null
     */
    public function getSession()
    {
        return $this->session;
    }
}
