<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Mail;
use App\Form\MailType;
use App\Entity\Projet;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index( Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $mail  = new mail();
        $form  = $this->createForm(MailType::class, $mail);
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findAll();

        // dd($projet);
        if($request-> isMethod("POST") && $form->handleRequest($request)->isValid())
        {
            $em->persist($mail);
            $em->flush();
        }
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'form' => $form->createView(),
            'projet' => $projet 
        ]);

    }
}
