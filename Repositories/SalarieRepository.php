<?php



/**
 * SalarieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SalarieRepository extends Doctrine\ORM\EntityRepository
{
  function sessionsSalarie($id, $mode = 'all'){
      //past or upcoming

      $query = " select f from \Note f where f.idSalarie = ".$id;

      if ( $mode === 'upcoming') {
          $query .= " and f.points IS NULL";
      }

      else if ( $mode === 'past'){
          $query .= " and f.points IS NOT NULL";
      }

      $notes = $this->_em->createQuery($query)->getResult();

      $sessions = [];

      foreach ($notes as $note){
          $sessions[] = $note->getSession();
      }

      return $sessions;

  }
}
