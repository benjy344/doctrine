<?php



/**
 * Professeur
 */
class Professeur
{
    /**
     * @var int
     */
    private $idProfesseur;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $nom;


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
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Professeur
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
     * @return Professeur
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $session;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seances = new \Doctrine\Common\Collections\ArrayCollection();
        $this->session = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add seance.
     *
     * @param \seance $seance
     *
     * @return Professeur
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

    /**
     * Add session.
     *
     * @param \session $session
     *
     * @return Professeur
     */
    public function addSession(\session $session)
    {
        $this->session[] = $session;

        return $this;
    }

    /**
     * Remove session.
     *
     * @param \session $session
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSession(\session $session)
    {
        return $this->session->removeElement($session);
    }

    /**
     * Get session.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSession()
    {
        return $this->session;
    }
}
