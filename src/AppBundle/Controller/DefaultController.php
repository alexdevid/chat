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

        //$this->auth($request);

        if (!extension_loaded('sockets')) {
            throw new \Exception("WebSockets UNAVAILABLE");
        }
        return $this->render('AppBundle::chat.html.twig');
    }

    private function auth(Request $request) {
        /* @var $userManager UserManager */
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername('dev');

        $token =new UsernamePasswordToken(
            $user,
            $user->getPassword(),
            'secured_area',
            $user->getRoles()
        );

        $this->get('security.context')->setToken($token);
        $request->getSession()->set('_security_secured_area', serialize($token));
    }
}
