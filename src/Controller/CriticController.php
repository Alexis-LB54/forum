<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entity\Critic;

class CriticController
{
    const CRITIC = [
        "Title", "resume", "author", "editor", "ISBN", "note", "Comment"
    ];

    const MODIFYCRITIC = [
        "Title", "note", "Comment"
    ];

    public function add()
    {
        $em = EntityManagerHelper::getEntityManager();

        $repositoryCritic = new EntityRepository ($em, new ClassMetadata("App\Entity\Article"));
        $Critic = $repositoryCritic->find($id);

        if (empty($_POST)) {
            include(__DIR__ . "/../Vues/client/addComment.php");
            die();
        }

        foreach (self::CRITIC as $value) {

            $_POST[$value] = htmlentities(strip_tags(trim($_POST[$value])));
            if ($_POST[$value] === "") {
                $error = "Le Champs est vide";
                include(__DIR__ . "/../Vues/client/addComment.php");
                echo $error;
            }

            if (array_key_exists($value, $_POST)) {
                $error = "Le Champs est vide";
                include(__DIR__ . "/../Vues/client/addComment.php");
                echo $error;
            }
        }
        
        $CriticTitle = $Critic->getTitle($_POST["Title"]);
        $CriticResume = $Critic->getTitle($_POST["resume"]);
        $CriticAuthor = $Critic->getTitle($_POST["author"]);
        $CriticEditor = $Critic->getTitle($_POST["editor"]);
        $CriticISBN = $Critic->getTitle($_POST["ISBN"]);
        $CriticNote = $_POST["note"];
        $CriticComment = $_POST["Comment"];

        $NewCritic = new Critic($CriticTitle, $CriticResume, $CriticAuthor, $CriticEditor, $CriticISBN, $CriticNote, $CriticComment);
        $em->persist($NewCritic);
        $em->flush();

        include(__DIR__ . "/../Vues/client/addComment.php");
    }

    public function modify(string $id)
    {
        $em = EntityManagerHelper::getEntityManager();

        $repositoryCritic = new EntityRepository ($em, new ClassMetadata("App\Entity\Article"));
        $Critic = $repositoryCritic->find($id);


        if (!empty($_POST)) {
            foreach (self::MODIFYCRITIC as $value) {
                $existe = array_key_exists($value, $_POST);
                if ($existe === false) {
                    echo "erreur";
                    include(__DIR__ . "/../Vues/client/modifyComment.php");
                    die();
                }

                $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));
                if ($_POST[$values] === "") {
                    echo "Champs $value vide";
                    include(__DIR__ . "/../Vues/client/modifyComment.php");
                    die();
                }
            }

            $Critic->getTitle($_POST["Title"]);
            $Critic->setNote($_POST["note"]);
            $Critic->setComment($_POST["Comment"]);
            $em->persist($Critic);
            $em->flush();

        }
    }

}
