<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entity\Article;

class ManagerController
{
    const ARTICLE = [
        "Title", "resume", "author", "editor", "ISBN", "note", "Comment"
    ];

    public function add()
    {
        $em = EntityManagerHelper::getEntityManager();

        if (empty($_POST)) {
            include(__DIR__ . "/../Vues/manager/addArticle.php");
            die();
        }

        foreach (self::ARTICLE as $value) {

            $_POST[$value] = htmlentities(strip_tags(trim($_POST[$value])));
            if ($_POST[$value] === "") {
                $error = "Le Champs est vide";
                include(__DIR__ . "/../Vues/manager/addArticle.php");
                echo $error;
            }

            if (array_key_exists($value, $_POST)) {
                $error = "Le Champs est vide";
                include(__DIR__ . "/../Vues/manager/addArticle.php");
                echo $error;
            }
        }

        $ArticleTitle = $_POST["Title"];
        $ArticleResume = $_POST["resume"];
        $ArticleAuthor = $_POST["author"];
        $ArticleEditor = $_POST["editor"];
        $ArticleISBN = $_POST["ISBN"];
        $ArticleNote = $_POST["note"];
        $ArticleComment = $_POST["Comment"];

        $NewArticle = new Article($ArticleTitle, $ArticleResume, $ArticleAuthor, $ArticleEditor, $ArticleISBN, $ArticleNote, $ArticleComment);
        $em->persist($NewArticle);
        $em->flush();

        include(__DIR__ . "/../Vues/manager/addArticle.php");
    }

    public function modify(string $id)
    {
        $em = EntityManagerHelper::getEntityManager();

        $repositoryArticle = new EntityRepository ($em, new ClassMetadata("App\Entity\Article"));
        $Article = $repositoryArticle->find($id);

        if (!empty($_POST)) {
            foreach (self::ARTICLE as $value) {
                $existe = array_key_exists($value, $_POST);
                if ($existe === false) {
                    echo "erreur";
                    include(__DIR__ . "/../Vues/manager/modifyArticle.php");
                    die();
                }

                $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));
                if ($_POST[$values] === "") {
                    echo "Champs $value vide";
                    include(__DIR__ . "/../Vues/manager/modifyArticle.php");
                    die();
                }
            }

            $Article->setTitle($_POST["Title"]);
            $Article->setResume($_POST["resume"]);
            $Article->setAuthor($_POST["author"]);
            $Article->setEditor($_POST["editor"]);
            $Article->setISBN($_POST["ISBN"]);
            $Article->setNote($_POST["note"]);
            $Article->setComment($_POST["Comment"]);
            $em->persist($Article);
            $em->flush();

        }
    }
}
