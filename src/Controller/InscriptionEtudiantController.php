<?php

namespace Quizz\Controller;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Core\View\TwigCore;

class InscriptionEtudiantController implements ControllerInterface
{
    public function inputRequest(array $tabInput)
    {


    }

    public function outputEvent()
    {
        $twig= TwigCore::getEnvironment();
        $lastname= $_POST["lastname"];
        $firstname= $_POST["firstname"];
        $username= $_POST["login"];
        $email = $_POST["email"];
        $password = $_POST["password"];


        echo $twig->render('home/inscription.html.twig');
    }
}
