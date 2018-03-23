<?php



/**
 * Creneau
 */
class Creneau
{
    /**
     * @var int
     */
    private $idCreneau;

    /**
     * @var \DateTime
     */
    private $debut;

    /**
     * @var \DateTime
     */
    private $fin;


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
     * Set debut.
     *
     * @param \DateTime $debut
     *
     * @return Creneau
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut.
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin.
     *
     * @param \DateTime $fin
     *
     * @return Creneau
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin.
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservation.
     *
     * @param \reservation $reservation
     *
     * @return Creneau
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
}
