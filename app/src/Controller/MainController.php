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


$encoders = [new XmlEncoder(), new JsonEncoder()];
$normalizers = [new ObjectNormalizer()];

$serializer = new Serializer($normalizers, $encoders);

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }



    #[Route('/simulation_start', name: 'simulation_start')]
    public function ajaxAction(Request $request)
    {
      $encoders = [new XmlEncoder(), new JsonEncoder()];
      $normalizers = [new ObjectNormalizer()];

      $serializer = new Serializer($normalizers, $encoders);
      $direcciones = ["Norte", "Sur", "Este","Oeste" ];
      if ($request->isXmlHttpRequest()) {
           $entityManager = $this->getDoctrine()->getManager();

            for($i=1;$i<=60;$i++){
              $nombre_simulador= 'nuptic-43';
              $direccion= $direcciones[rand(0, 3)];
              $recorrido= rand(10, 20);
              $peticion = new Peticion($nombre_simulador,$i,$direccion,  $recorrido);

              $entityManager->persist($peticion);
              $entityManager->flush();
            }


          $result1=$entityManager->getRepository(Peticion::class)->findSumRecorrido();
        //  $result2=$entityManager->getRepository(Peticion::class)->findDireccionFrequente("nuptic-43");
          $jsonContent = $serializer->serialize($result1, 'json');
          return new Response($jsonContent, 200);
        }

      return new Response('Sopmething went wrong', 400);
    }


}
