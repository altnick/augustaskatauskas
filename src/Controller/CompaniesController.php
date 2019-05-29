<?php
  namespace App\Controller;
  use App\Entity\Companies;
  use App\Entity\Registrations;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\Form\Extension\Core\Type\TextType;
  use Symfony\Component\Form\Extension\Core\Type\IntegerType;
  use Symfony\Component\Form\Extension\Core\Type\SubmitType;
  use Symfony\Component\Form\Extension\Core\Type\TimeType;
  use Symfony\Component\Form\Extension\Core\Type\HiddenType;
  
  class CompaniesController extends Controller {
    /**
     * @Route("/", name="companies_list")
     * @Method({"GET"})
     */
    public function index() {
      $companies= $this->getDoctrine()->getRepository(Companies::class)->findAll();
      return $this->render('articles/categories.html.twig', array('companies' => $companies));
    }
    /**
     * @Route("/companies/new", name="new_companies")
     * Method({"GET", "POST"})
     */
    public function new(Request $request) {
      $companies = new Companies();
      $form = $this->createFormBuilder($companies)
        ->add('Paslauga', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('Specialistas', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('Pavadinimas', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('Miestas', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('Adresas', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('Telefono_numeris', IntegerType::class, array('attr' => array('class' => 'form-control')))
        ->add('Darbo_pradzia', TimeType::class, array('attr' => array('class' => 'form-control')))
        ->add('Darbo_pabaiga', TimeType::class, array('attr' => array('class' => 'form-control')))
        ->add('Paslaugos_trukme', TimeType::class, array('attr' => array('class' => 'form-control')))
        ->add('save', SubmitType::class, array(
          'label' => 'Sukurti',
          'attr' => array('class' => 'btn btn-primary mt-3')
        ))
        ->getForm();
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()) {
        $companies = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($companies);
        $entityManager->flush();
        return $this->redirectToRoute('companies_list');
      }
      return $this->render('articles/newcompanies.html.twig', array(
        'form' => $form->createView()
      ));
    }

    /**
     * @Route("/companies/{id}", name="companies_show")
     * Method({"GET", "POST"})
     */
    public function show($id) {
      $companies = $this->getDoctrine()->getRepository(Companies::class)->find($id);
      $registrations= $this->getDoctrine()->getRepository(Registrations::class)->findAll();
      return $this->render('articles/showCompanies.html.twig', array('companies' => $companies, 'registrations' => $registrations));
    }
        /**
     * @Route("/companies/rezervation/{id}/{timeInvervalFrom}/registrate", name="companiesReservation_show_new")
     * Method({"GET", "POST"})
     */
    public function registration(Request $request) {
      $companies = new Registrations();
      $form = $this->createFormBuilder($companies)
        ->add('Vardas', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('Pavarde', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('Telefono_numeris', IntegerType::class, array('attr' => array('class' => 'form-control')))
        ->add('compid', HiddenType::class, [
          'data' => $request->attributes->get('id')])
        ->add('reztime', HiddenType::class, [
          'data' => $request->attributes->get('timeInvervalFrom')])  
        ->add('save', SubmitType::class, array(
          'label' => 'Registruotis',
          'attr' => array('class' => 'btn btn-primary mt-3')
        ))
        ->getForm();
        //dump($request);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()) {
        $companies = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($companies);
        $entityManager->flush();
        return $this->redirectToRoute('companies_list');
      }
      return $this->render('articles/new.html.twig', array(
        'form' => $form->createView()
      ));
    }
    /**
     * @Route("/companies/rezervation/{id}/{timeInvervalFrom}", name="companiesReservation_show")
     * Method({"GET", "POST"})
     */
    public function showReservation($id, Request $request) {
      $companies = $this->getDoctrine()->getRepository(Companies::class)->find($id);
      return $this->render('articles/showCompaniesReservation.html.twig', array('companies' => $companies));
    }

    
    
  }