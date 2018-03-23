<?php

require_once 'bootstrap.php';
// var_dump($_GET);
// var_dump(isset($_GET['portal']));


// $dreamFactory = new Entreprise;

// $dreamFactory->setNom('toto');
// $dreamFactory->setAdresse('11 rue du rêve');

// $em->persist($dreamFactory);
// $em->flush();


//$seances = [1, 2];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Super Formation</title>
</head>
<body>
  <main>
    <section>
      <?php
        if(!isset($_GET) || !isset($_GET['portal']) ){ ?>
            <div class="portal">
              <a href="?portal=admin">
                <h1>Admin</h1>
              </a>
            </div>

          </section>
          <section>
            <div class="portal">
              <a href="?portal=salarie">
                <h1>Salarie</h1>
              </a>
            </div>
          </section>

        <?php
      }
        else {
          if($_GET['portal'] == 'admin'){?>
            <section>
              <div class="contentSeances">
                <ul>
                  <?php
                  $seances = $em->getRepository('\Seance')->findAll();
                  foreach ($seances as $key => $seance)
                    $sessions = $seance->getSessions();
                    foreach ($sessions as $key => $session) {
                      $render =  "<li>".$session->getNom()." pour la matiere ".$seance->getMatiere()->getNom();
                      if(!$em->getRepository('\Session')->isPlaceDispo($session->getIdSession())) $render .= "<div>Il n'y a pas assez de place</div>";
                      $render .= "</li>";
                      echo $render;
                    }

                   ?>
                </ul>
              </div>
            </section>
          <?php } else { ?>

            <?php
              $salarie = $em->find('\Salarie', 1);
              $sessionUpcoming = $em->getRepository('\Salarie')->sessionsSalarie($salarie->getIdSalarie(), 'upcoming');
              foreach ($sessionUpcoming as $key => $session) {
                $render  =  "<li>".$session->getNom()." pour la matiere ".$session->getSeance()->getMatiere()->getNom();
                $render .="<span>à venir</span>";
                $render .= "</li>";
                echo $render;
              }
              $salarieNotes = $salarie->getNotes();
              foreach ($salarieNotes as $key => $note) {
                if($note->getPoints() != null) {
                $session = $em->find('\Session', $note->getIdSession());
                $render  =  "<li>".$session->getNom()." pour la matiere ".$session->getSeance()->getMatiere()->getNom();

                $render.="<span>".$note->getPoints()."/".$note->getDenominateur()." </span>";
                $render .= "</li>";
                echo $render;
                }

              }


             ?>

          <?php }
        }?>

  </main>

</body>
</html>