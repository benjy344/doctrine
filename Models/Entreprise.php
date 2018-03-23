<?php



/**
 * Entreprise
 */
class Entreprise
{
    /**
     * @var int
     */
    private $idEntreprise;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $salaries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->salaries = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom.
     *
     * @param string $nom
     *
     * @return Entreprise
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
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Entreprise
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add salary.
     *
     * @param \salarie $salary
     *
     * @return Entreprise
     */
    public function addSalary(\salarie $salary)
    {
        $this->salaries[] = $salary;

        return $this;
    }

    /**
     * Remove salary.
     *
     * @param \salarie $salary
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSalary(\salarie $salary)
    {
        return $this->salaries->removeElement($salary);
    }

    /**
     * Get salaries.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalaries()
    {
        return $this->salaries;
    }
}
