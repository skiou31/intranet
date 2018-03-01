<?php
/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 13/02/2018
 * Time: 10:15
 */

namespace HEI\ContactBundle\Controller;

use HEI\ContactBundle\Entity\Contact;
use HEI\ContactBundle\Form\ContactType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Vicopo\Vicopo;

/**
 * Class ContactController
 * @package HEI\ContactBundle\Controller
 */
class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function addAction(Request $request) {
        $contact = new Contact();
        $form = $this->get('form.factory')->create(ContactType::class, $contact);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
            }
        }

        return $this->render('HEIContactBundle:Contact:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function searchAction(Request $request) {
        $contact = new Contact();

        $listener = function (FormEvent $event) {
            $data = $event->getData();

            if (!$data) {
                return;
            }

            $ville = $data["ville"];
//            $event->getForm()->add('ville', TextType::class, array('data' => $ville));
            $event
                ->getForm()
                ->add('ville',      ChoiceType::class, array(
                    'required'  => false,
                    'choices'   =>  array(
                        $ville  =>  $ville
                    )
                ))
            ;
        };

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $contact);

        $formBuilder
            ->add('nom',            TextType::class, array(
                'required'  =>  false
            ))
            ->add('codePostal',     NumberType::class, array(
                'required'  =>  false
            ))
            ->add('ville',          ChoiceType::class, array(
                'required'  =>  false
            ))
            ->addEventListener(FormEvents::PRE_SUBMIT, $listener)
            ->add('adresse',        TextType::class, array(
                'required'  =>  false
            ))
            ->add('commercial',     ChoiceType::class, array(
                'required'  => false,
                'choices'   =>  array(
                    'Commercial'            =>  '',
                    'A définir'             =>  'a definir',
                    'Cyril Frère'           =>  'Cyril',
                    'Lionel Dombrowski'     =>  'Lionel',
                    'Victorien Camicia'     =>  'Victorien',
                    'Adrien Thieffry'       =>  'Adrien',
                    'Dominique Delille'     =>  'Dominique',
                    'Sébastien Hallez'      =>  'Sebastien',
                    'Jérôme Ombrouck'       =>  'Jerome',
                    'Benoit Charpentier'    =>  'Benoit',
                    'Stéphane Hearteaux'    =>  'Stephane'
                )
            ))
            ->add('Rechercher',        SubmitType::class)
        ;

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $repository = $this
                    ->getDoctrine()
                    ->getManager()
                    ->getRepository('HEIContactBundle:Contact')
                ;

                $contacts = $repository->findContacts($contact);

                return $this->render('HEIContactBundle:Contact:search.html.twig', array(
                    'form'  => $form->createView(),
                    'contacts' => $contacts,
                ));
            }
        }

        return $this->render('HEIContactBundle:Contact:search.html.twig', array(
            'form'  => $form->createView(),
        ));
    }

    public function consultAction() {
        return $this->render('HEIContactBundle:Contact:consult.html.twig');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function autocompleteAction(Request $request) {
        $codePostal = $request->query->get('codePostal');

        $data = Vicopo::http($codePostal);
        $dataJSON = json_encode($data);

        return new JsonResponse($dataJSON);
    }
}