<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Peticion;
use App\Form\PeticionType;
use App\Repository\PeticionRepository;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;



class MainController extends AbstractController
{




    #[Route('/', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }



    #[Route('/peticion', name: 'peticion')]
    public function ajaxPeticion(Request $request)
    {


      $encoders = [new XmlEncoder(), new JsonEncoder()];
      $normalizers = [new ObjectNormalizer()];
      $serializer = new Serializer($normalizers, $encoders);

      $direcciones = ["Norte", "Sur", "Este","Oeste" ];

      if ($request->isXmlHttpRequest()) {
        $entityManager = $this->getDoctrine()->getManager();
        $id_simulacion= $request->get("id_simulacion");
        $nombre_simulador= $request->get("nombre_simulador");
        $direccion= $request->get("direccion");
        $recorrido= $request->get("recorrido");
        $num=$request->get("num");
        $peticion = new Peticion($id_simulacion,$nombre_simulador,$num,$direccion,  $recorrido);
        $entityManager->persist($peticion);
        $entityManager->flush();


        $jsonContent = $serializer->serialize($peticion, 'json');
        return new Response($jsonContent, 200);
      }

      return new Response('Sopmething went wrong', 400);
    }


    #[Route('/simulacion_recorrido', name: 'simulacion_recorrido')]
    public function ajaxRecorrido(Request $request)
    {

      $encoders = [new XmlEncoder(), new JsonEncoder()];
      $normalizers = [new ObjectNormalizer()];
      $serializer = new Serializer($normalizers, $encoders);

      if ($request->isXmlHttpRequest()) {
        $entityManager = $this->getDoctrine()->getManager();
        $id_simulacion= $request->get("id_simulacion");
        $result1=$entityManager->getRepository(Peticion::class)->findSumRecorrido($id_simulacion);
        $jsonContent = $serializer->serialize($result1, 'json');
        return new Response($jsonContent, 200);
      }

      return new Response('Sopmething went wrong', 400);
    }

    #[Route('/simulacion_direccion', name: 'simulacion_direccion')]
    public function ajaxDireccion(Request $request)
    {

      $encoders = [new XmlEncoder(), new JsonEncoder()];
      $normalizers = [new ObjectNormalizer()];
      $serializer = new Serializer($normalizers, $encoders);

      if ($request->isXmlHttpRequest()) {
        $entityManager = $this->getDoctrine()->getManager();
        $id_simulacion= $request->get("id_simulacion");
        $result2=$entityManager->getRepository(Peticion::class)->findDireccionFrequente("nuptic-43",$id_simulacion);
        $jsonContent = $serializer->serialize($result2, 'json');
        return new Response($jsonContent, 200);
      }

      return new Response('Sopmething went wrong', 400);
    }



}
