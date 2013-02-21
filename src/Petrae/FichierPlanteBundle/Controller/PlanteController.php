<?php

namespace Petrae\FichierPlanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Petrae\FichierPlanteBundle\Entity\Plante;
use Petrae\FichierPlanteBundle\Form\PlanteType;

/**
 * Plante controller.
 *
 */
class PlanteController extends Controller
{
    /**
     * Lists all Plante entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $plantes = $em->getRepository('PetraeFichierPlanteBundle:Plante')->findAll();

        return $this->render('PetraeFichierPlanteBundle:Plante:index.html.twig', array(
            'plantes' => $plantes,
        ));
    }

    /**
     * Finds and displays a Plante entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $plante = $em->getRepository('PetraeFichierPlanteBundle:Plante')->find($id);

        if (!$plante) {
            throw $this->createNotFoundException('Unable to find Plante .');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PetraeFichierPlanteBundle:Plante:show.html.twig', array(
            'plante'      => $plante,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Plante entity.
     *
     */
    public function newAction()
    {
        $entity = new Plante();
        $form   = $this->createForm(new PlanteType(), $entity);

        return $this->render('PetraeFichierPlanteBundle:Plante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Plante entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Plante();
        $form = $this->createForm(new PlanteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plante_show', array('id' => $entity->getId())));
        }

        return $this->render('PetraeFichierPlanteBundle:Plante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Plante entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $plante = $em->getRepository('PetraeFichierPlanteBundle:Plante')->find($id);

        if (!$plante) {
            throw $this->createNotFoundException('Unable to find Plante entity.');
        }

        $editForm = $this->createForm(new PlanteType(), $plante);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PetraeFichierPlanteBundle:Plante:edit.html.twig', array(
            'plante'      => $plante,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Plante entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PetraeFichierPlanteBundle:Plante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PlanteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plante_show', array('id' => $id)));
        }

        return $this->render('PetraeFichierPlanteBundle:Plante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Plante entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PetraeFichierPlanteBundle:Plante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Plante entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plante'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
