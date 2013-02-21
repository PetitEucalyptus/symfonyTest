<?php

namespace Petrae\FichierPlanteBundle\Controller;

use \Symfony\Component\HttpFoundation\Response;
use \Petrae\FichierPlanteBundle\Entity\Plante;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Request;
use \Petrae\FichierPlanteBundle\Form\Type\PlanteType;

class FichierPlanteController extends Controller
{

    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("PetraeFichierPlanteBundle:Plante");
        $liste = $repository->findAll();

        return $this->render('PetraeFichierPlanteBundle:Default:index.html.twig', array('plantes' => $liste));
    }

    public function voirAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository("PetraeFichierPlanteBundle:Plante");
        $plante = $repository->find($id);

        return $this->render('PetraeFichierPlanteBundle:Default:voir.html.twig', array('plante' => $plante) );
    }

    public function ajouterAction(Request $request)
    {
        $sousTitre = "Ajouter une fiche";
        $plante = new Plante();
        $form = $this->createForm(new PlanteType(), $plante);

        if($request->isMethod('Post'))
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($plante);
                $em->flush();

                return $this->redirect($this->generateUrl('petrae_fichier_plante_success'));
            }
        }

        return $this->render('PetraeFichierPlanteBundle:Default:ajouter.html.twig'
            , array('form' => $form->createView()
            , 'SousTitre' => $sousTitre));

    }

    public function modifierAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('PetraeFichierPlanteBundle:Plante');
        $plante = $repository->find($id);
        $form = $this->createForm(new PlanteType(), $plante);
        $sousTitre = "Modifier ".$plante->getNomLatin();

        return $this->render('PetraeFichierPlanteBundle:Default:ajouter.html.twig', array('form' => $form->createView(),
            'SousTitre' => $sousTitre));
    }


    public function supprimerAction($id)
    {
        return new Response($id);
    }


}

?>
