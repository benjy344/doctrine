<?php



/**
 * Seance
 */
class Seance
{
    /**
     * @var int
     */
    private $idSeance;

    /**
     * @var int
     */
    private $idProfesseur;

    /**
     * @var int
     */
    private $idMatiere;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var \matiere
     */
    private $matiere;


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
     * Set idProfesseur.
     *
     * @param int $idProfesseur
     *
     * @return Seance
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
     * Set idMatiere.
     *
     * @param int $idMatiere
     *
     * @return Seance
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

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
     * @return Seance
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
     * Set contenu.
     *
     * @param string $contenu
     *
     * @return Seance
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu.
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set matiere.
     *
     * @param \matiere|null $matiere
     *
     * @return Seance
     */
    public function setMatiere(\matiere $matiere = null)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere.
     *
     * @return \matiere|null
     */
    public function getMatiere()
    {
        return $this->matiere;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sessions;

    /**
     * @var \professeur
     */
    private $titulaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sessions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add session.
     *
     * @param \session $session
     *
     * @return Seance
     */
    public function addSession(\session $session)
    {
        $this->sessions[] = $session;

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
        return $this->sessions->removeElement($session);
    }

    /**
     * Get sessions.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * Set titulaire.
     *
     * @param \professeur|null $titulaire
     *
     * @return Seance
     */
    public function setTitulaire(\professeur $titulaire = null)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    /**
     * Get titulaire.
     *
     * @return \professeur|null
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }
}
