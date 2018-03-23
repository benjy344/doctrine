<?php require_once 'bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Super Formation</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<main>


    <?php if (!isset($_GET) || !isset($_GET['portal'])) { ?>

        <nav class="container-pushes">

            <section class="push-select admin">

                <div class="portal">
                    <div class="icon-svg" id="icon-admin"></div>
                    <a href="?portal=admin">
                        <h1>Administration</h1>
                    </a>
                </div>

            </section>

            <section class="push-select salarie">
                <div class="portal">
                    <div class="icon-svg" id="icon-student"></div>
                    <a href="?portal=salarie">
                        <h1>Étudiant</h1>
                    </a>
                </div>
            </section>
        </nav>

        <?php
    } else {
        if ($_GET['portal'] == 'admin') {
            ?>
            <section id="admin">
                <div class="contentSeances">
                    <h1>les séances</h1>
                    <ul>
                        <?php
                        $seances = $em->getRepository('\Seance')->findAll();
                        foreach ($seances as $key => $seance)
                            $sessions = $seance->getSessions();
                        foreach ($sessions as $key => $session) {
                            $render = "<li>" . $session->getNom() . " pour la matiere " . $seance->getMatiere()->getNom();
                            if (!$em->getRepository('\Session')->isPlaceDispo($session->getIdSession())) $render .= "<div>Il n'y a pas assez de place</div>";
                            $render .= "</li>";
                            echo $render;
                        }

                        ?>
                    </ul>
                </div>
            </section>
        <?php } else { ?>

            <?php

            echo '<ul><h1>les séances</h1>';
            $salarie = $em->find('\Salarie', 1);
            $sessionUpcoming = $em->getRepository('\Salarie')->sessionsSalarie($salarie->getIdSalarie(), 'upcoming');
            foreach ($sessionUpcoming as $key => $session) {
                $render = "<li>" . $session->getNom() . " pour la matiere " . $session->getSeance()->getMatiere()->getNom();
                $render .= "<span> à venir</span>";
                $render .= "</li>";
                echo $render;
            }
            $salarieNotes = $salarie->getNotes();
            foreach ($salarieNotes as $key => $note) {
                if ($note->getPoints() != null) {
                    $session = $em->find('\Session', $note->getIdSession());
                    $render = "<li>" . $session->getNom() . " pour la matiere " . $session->getSeance()->getMatiere()->getNom();

                    $render .= "<span>" . $note->getPoints() . "/" . $note->getDenominateur() . " </span>";
                    $render .= "</li>";
                    echo $render;
                }

            }

            echo '</ul>';
        }
    } ?>

</main>

</body>
</html>