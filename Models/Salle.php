<?php



/**
 * Salle
 */
class Salle
{
    /**
     * @var int
     */
    private $idSalle;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $emplacement;

    /**
     * @var int
     */
    private $places;

    /**
     * @var bool
     */
    private $tabeauRoulettes;


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
     * Set nom.
     *
     * @param string $nom
     *
     * @return Salle
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
     * Set emplacement.
     *
     * @param string $emplacement
     *
     * @return Salle
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement.
     *
     * @return string
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * Set places.
     *
     * @param int $places
     *
     * @return Salle
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }

    /**
     * Get places.
     *
     * @return int
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Set tabeauRoulettes.
     *
     * @param bool $tabeauRoulettes
     *
     * @return Salle
     */
    public function setTabeauRoulettes($tabeauRoulettes)
    {
        $this->tabeauRoulettes = $tabeauRoulettes;

        return $this;
    }

    /**
     * Get tabeauRoulettes.
     *
     * @return bool
     */
    public function getTabeauRoulettes()
    {
        return $this->tabeauRoulettes;
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
     * @return Salle
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
