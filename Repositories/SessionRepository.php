<?php



/**
 * SessionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SessionRepository extends Doctrine\ORM\EntityRepository
{
  function isPlaceDispo($id){

      $inscrits = count($this->_em->getRepository('\Note')->findBy(array('idSession' => $id)));
      $places = $this->_em->getRepository('\Reservation')->findOneBy(array('idSession' => $id))->getSalle()->getPlaces();
      if ($inscrits < $places)
      {
          return true;
      }
      else
      {
          return false;
      }
  }

  function sessionFull() {
    $sessions = $this->_em->getRepository('\Session')->findAll();
    $sessionsFull = [];
    foreach ($sessions as $key => $session) {
      if(!$this->isPlaceDispo($session->getIdSession())){
        array_push($sessionsFull, $session);
      }
    }
    return $sessionsFull;
  }


  function getSessionBySeanceId($id) {
    //lister les différentes configuration existante d'une session, avec pour chacun le nom du prof ayant créé cette configuration
    $seance   = $this->_em->getRepository('\Seance')->findBy(array('idSeance' => $id));
    $sessions = $seance->getSessions();
    return $sessions;

  }
}