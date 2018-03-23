<?php



/**
 * Note
 */
class Note
{
    /**
     * @var int
     */
    private $idNote;

    /**
     * @var int
     */
    private $idSalarie;

    /**
     * @var int
     */
    private $idSession;

    /**
     * @var float
     */
    private $points;

    /**
     * @var int
     */
    private $coefficient;

    /**
     * @var int
     */
    private $denominateur;


    /**
     * Get idNote.
     *
     * @return int
     */
    public function getIdNote()
    {
        return $this->idNote;
    }

    /**
     * Set idSalarie.
     *
     * @param int $idSalarie
     *
     * @return Note
     */
    public function setIdSalarie($idSalarie)
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }

    /**
     * Get idSalarie.
     *
     * @return int
     */
    public function getIdSalarie()
    {
        return $this->idSalarie;
    }

    /**
     * Set idSession.
     *
     * @param int $idSession
     *
     * @return Note
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
     * Set points.
     *
     * @param float $points
     *
     * @return Note
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points.
     *
     * @return float
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set coefficient.
     *
     * @param int $coefficient
     *
     * @return Note
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient.
     *
     * @return int
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Set denominateur.
     *
     * @param int $denominateur
     *
     * @return Note
     */
    public function setDenominateur($denominateur)
    {
        $this->denominateur = $denominateur;

        return $this;
    }

    /**
     * Get denominateur.
     *
     * @return int
     */
    public function getDenominateur()
    {
        return $this->denominateur;
    }
    /**
     * @var \session
     */
    private $session;

    /**
     * @var \salarie
     */
    private $salarie;


    /**
     * Set session.
     *
     * @param \session|null $session
     *
     * @return Note
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

    /**
     * Set salarie.
     *
     * @param \salarie|null $salarie
     *
     * @return Note
     */
    public function setSalarie(\salarie $salarie = null)
    {
        $this->salarie = $salarie;

        return $this;
    }

    /**
     * Get salarie.
     *
     * @return \salarie|null
     */
    public function getSalarie()
    {
        return $this->salarie;
    }
}
