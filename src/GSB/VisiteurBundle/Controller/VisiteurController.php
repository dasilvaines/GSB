<?php

namespace GSB\VisiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GSB\VisiteurBundle\Entity\visiteur;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;


class VisiteurController extends Controller
{
    public function addAction(Request $request)
    {
       $visiteur = new visiteur() ;

       $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $visiteur) ;

       $formBuilder
           ->add('nom',     TextType::class, array('label'=>"Nom :"), array('placeholder'=>"Votre Nom"))
           ->add('prenom',     TextType::class, array('label'=>"Prenom :"), array('placeholder'=>"Votre Prenom"))
           ->add('adresse',     TextType::class, array('label'=>"Adresse :"), array('placeholder'=>"Votre Adresse"))
           ->add('ville',     TextType::class, array('label'=>"Ville :"), array('placeholder'=>"Votre Ville"))
           ->add('cp',     NumberType::class, array('label'=>"CP:"), array('placeholder'=>"Votre Code Postal"))
           ->add('date_embauche',     DateType::class, array('label'=>"Date Embauche :"), array('placeholder'=>"Votre Date embauche"))
           ->add('login',     TextType::class)
           ->add('mdp',     PasswordType::class)
           ->add('valider',     SubmitType::class) ;

       $form = $formBuilder->getForm();

       if($request->isMethod('POST')){
           $form->handleRequest($request);
           if($form->isValid()){
               $em = $this->getDoctrine()->getManager();
               $em->persist($visiteur);
               $em->flush();
               $request->getSession()->getFlashBag()->add('notice', 'Visiteur bien enregistre.');
               return $this->redirectToRoute('gsb_visiteur_visiteur2');
           }

       }

       return $this->render( 'GSBVisiteurBundle:Visiteur:ajout.html.twig', array('form' =>$form->createView()));
    }

    public function  registerAction(){
        return $this->render("GSBVisiteurBundle:Visiteur:register.html.twig");
    }
}
