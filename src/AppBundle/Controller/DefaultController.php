<?php
namespace AppBundle\Controller;

use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="default")
     */
    public function indexAction(Request $request) {
        if (!extension_loaded('sockets')) {
            throw new \Exception("WebSockets UNAVAILABLE");
        }
        return $this->render('AppBundle::chat.html.twig');
    }
}
