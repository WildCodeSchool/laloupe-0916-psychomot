<?php

namespace PsychomotBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PsychomotBundle\Entity\Psychomot;
use PsychomotBundle\Form\PsychomotType;

/**
 * Psychomot controller.
 *
 */
class PsychomotController extends Controller
{
    /**
     * Lists all Psychomot entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $psychomots = $em->getRepository('PsychomotBundle:Psychomot')->findAll();

        return $this->render('PsychomotBundle:psychomot:index.html.twig', array(
            'psychomots' => $psychomots,
        ));
    }

    /**
     * Creates a new Psychomot entity.
     *
     */
    public function newAction(Request $request)
    {
        $psychomot = new Psychomot();
        $form = $this->createForm('PsychomotBundle\Form\PsychomotType', $psychomot);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($psychomot);
            $em->flush();

            return $this->redirectToRoute('psychomot_show', array('id' => $psychomot->getId()));
        }

        return $this->render('PsychomotBundle:psychomot:new.html.twig', array(
            'psychomot' => $psychomot,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Psychomot entity.
     *
     */
    public function showAction(Psychomot $psychomot)
    {
        $deleteForm = $this->createDeleteForm($psychomot);

        return $this->render('PsychomotBundle:psychomot:show.html.twig', array(
            'psychomot' => $psychomot,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Psychomot entity.
     *
     */
    public function editAction(Request $request, Psychomot $psychomot)
    {
        $deleteForm = $this->createDeleteForm($psychomot);
        $editForm = $this->createForm('PsychomotBundle\Form\PsychomotType', $psychomot);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($psychomot);
            $em->flush();

            return $this->redirectToRoute('psychomot_edit', array('id' => $psychomot->getId()));
        }

        return $this->render('PsychomotBundle:psychomot:edit.html.twig', array(
            'psychomot' => $psychomot,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Psychomot entity.
     *
     */
    public function deleteAction(Request $request, Psychomot $psychomot)
    {
        $form = $this->createDeleteForm($psychomot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($psychomot);
            $em->flush();
        }

        return $this->redirectToRoute('psychomot_index');
    }

    /**
     * Creates a form to delete a Psychomot entity.
     *
     * @param Psychomot $psychomot The Psychomot entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Psychomot $psychomot)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('psychomot_delete', array('id' => $psychomot->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function RedirectionAction()
    {
        return $this->render('PsychomotBundle:psychomot:mail.html.twig');
    }
    public function mailAction()
    {
        $Request = $this->getRequest();
        if ($Request->getMethod() == "POST") {
            $subject = $Request->get("object");

            $message = $Request->get("message");

            $message = \Swift_Message::newInstance('Test')
                ->setSubject($subject)
                ->setFrom('psychomot72@gmail.com')
                ->setTo('florian.galerne@free.fr', 'retatsylvie@gmail.com')
                ->setBody($message);
            $this->get('mailer')->send($message);


        }
        return $this->render('PsychomotBundle:psychomot:mail.html.twig');
    }


}
