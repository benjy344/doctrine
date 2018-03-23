<?php



/**
 * Matiere
 */
class Matiere
{
    /**
     * @var int
     */
    private $idMatiere;

    /**
     * @var string
     */
    private $nom;


    /**
     * Get idMatiere.
     *
     * @return int
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Matiere
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $seances;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seances = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add seance.
     *
     * @param \seance $seance
     *
     * @return Matiere
     */
    public function addSeance(\seance $seance)
    {
        $this->seances[] = $seance;

        return $this;
    }

    /**
     * Remove seance.
     *
     * @param \seance $seance
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSeance(\seance $seance)
    {
        return $this->seances->removeElement($seance);
    }

    /**
     * Get seances.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeances()
    {
        return $this->seances;
    }
}
