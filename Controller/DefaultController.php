<?php
namespace Runalyze\Bundle\GlossaryBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * Class DefaultController
 * @package Runalyze\Bundle\GlossaryBundle\Controller
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GlossaryBundle::overview.html.twig');
    }
}
