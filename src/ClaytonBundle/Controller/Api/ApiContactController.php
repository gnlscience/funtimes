<?php
namespace ClaytonBundle\Controller\Api;

use ClaytonBundle\Service\ContactService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/api/contact")
 */
class ApiContactController extends Controller
{

    /**
     * @Route("/")
     * @Method({"POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function processForm(Request $request)
    {
        try {
            $contactService = new ContactService();
            $contact = $contactService->create(json_decode($request->getContent()));
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            return $this->json(["result" => true, "message" => "success"]);
        }catch(\Exception $e){
            return $this->json(["result" => false, "message" => $e->getMessage()], 404);
        }
    }
}
