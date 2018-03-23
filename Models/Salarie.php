<?php



/**
 * Salarie
 */
class Salarie
{
    /**
     * @var int
     */
    private $idSalarie;

    /**
     * @var int
     */
    private $idEntreprise;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \entreprise
     */
    private $entreprise;


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
     * Set idEntreprise.
     *
     * @param int $idEntreprise
     *
     * @return Salarie
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get idEntreprise.
     *
     * @return int
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Salarie
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Salarie
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
     * Set entreprise.
     *
     * @param \entreprise|null $entreprise
     *
     * @return Salarie
     */
    public function setEntreprise(\entreprise $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise.
     *
     * @return \entreprise|null
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $notes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add note.
     *
     * @param \note $note
     *
     * @return Salarie
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
}
