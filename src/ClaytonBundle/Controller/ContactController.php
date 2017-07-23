<?php
namespace ClaytonBundle\Controller;

use ClaytonBundle\ModelBuilder\FormlyModelBuilder;
use ClaytonBundle\Service\ContactService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Tests\Compiler\C;
use Symfony\Component\HttpFoundation\Request;
use ClaytonBundle\Entity\Contact;

/**
 * @Route("/contact")
 */
class ContactController extends Controller
{
    /**
     * @Route("/")
     * @Method({"GET"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $contactService = new ContactService();
        $formlyModelBuilder = new FormlyModelBuilder();
		return $this->render('@Clayton/index.twig', $formlyModelBuilder->buildFormlyModel($contactService->formFields()));
    }

}
