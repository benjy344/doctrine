<?php



/**
 * Cours
 */
class Cours
{
    /**
     * @var int
     */
    private $idCours;

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
     * Get idCours.
     *
     * @return int
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * Set idProfesseur.
     *
     * @param int $idProfesseur
     *
     * @return Cours
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
     * @return Cours
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
     * @return Cours
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
     * @return Cours
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
}
