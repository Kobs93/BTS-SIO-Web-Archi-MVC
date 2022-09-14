<?php

namespace Quizz\Controller;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Service\TwigService;

class HelloController implements ControllerInterface

{

    public function inputRequest(array $tabInput)
    {
        if (isset($tabInput["VARS"]["id"])) {
            $this->id = $tabInput["VARS"]["id"];
        }

    }

    public function outputEvent()
    {
        $twig= TwigService::getEnvironment();

        echo $twig->render('home/hello.html.twig');


    }
}