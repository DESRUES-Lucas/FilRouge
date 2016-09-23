<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\StarRate;
use AppBundle\Form\StarRateType;

/**
 * StarRate controller.
 *
 * @Route("/starrate")
 */
class StarRateController extends Controller
{
    /**
     * Lists all StarRate entities.
     *
     * @Route("/", name="starrate_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $starRates = $em->getRepository('AppBundle:StarRate')->findAll();

        return $this->render('starrate/index.html.twig', array(
            'starRates' => $starRates,
        ));
    }

    /**
     * Creates a new StarRate entity.
     *
     * @Route("/new", name="starrate_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $starRate = new StarRate();
        $form = $this->createForm('AppBundle\Form\StarRateType', $starRate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($starRate);
            $em->flush();

            return $this->redirectToRoute('starrate_show', array('id' => $starRate->getId()));
        }

        return $this->render('starrate/new.html.twig', array(
            'starRate' => $starRate,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a StarRate entity.
     *
     * @Route("/{id}", name="starrate_show")
     * @Method("GET")
     */
    public function showAction(StarRate $starRate)
    {
        $deleteForm = $this->createDeleteForm($starRate);

        return $this->render('starrate/show.html.twig', array(
            'starRate' => $starRate,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing StarRate entity.
     *
     * @Route("/{id}/edit", name="starrate_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, StarRate $starRate)
    {
        $deleteForm = $this->createDeleteForm($starRate);
        $editForm = $this->createForm('AppBundle\Form\StarRateType', $starRate);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($starRate);
            $em->flush();

            return $this->redirectToRoute('starrate_edit', array('id' => $starRate->getId()));
        }

        return $this->render('starrate/edit.html.twig', array(
            'starRate' => $starRate,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a StarRate entity.
     *
     * @Route("/{id}", name="starrate_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, StarRate $starRate)
    {
        $form = $this->createDeleteForm($starRate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($starRate);
            $em->flush();
        }

        return $this->redirectToRoute('starrate_index');
    }

    /**
     * Creates a form to delete a StarRate entity.
     *
     * @param StarRate $starRate The StarRate entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StarRate $starRate)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('starrate_delete', array('id' => $starRate->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
