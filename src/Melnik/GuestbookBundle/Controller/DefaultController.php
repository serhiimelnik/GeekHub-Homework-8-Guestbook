<?php

namespace Melnik\GuestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Melnik\GuestbookBundle\Entity\Entry;
use Melnik\GuestbookBundle\Form\EntryType;

class DefaultController extends Controller
{
    public function indexAction( Request $request )
    {
        $entry = new Entry();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new EntryType(), $entry);

        $entrys = $em->getRepository('MelnikGuestbookBundle:Entry')->findAll();

        $paginator = $this->get('knp_paginator');

        $entrys = $paginator->paginate(
            $entrys,
            $request->query->get('page', 1),
            10
        );


        if ($request->getMethod() === 'POST')
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $entry = $form->getData();
                $em->persist($entry);
                $em->flush();

                return $this->redirect($this->generateUrl('melnik_guestbook'));
            }
        }

        return $this->render('MelnikGuestbookBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'entrys' => $entrys         ));
    }
}
