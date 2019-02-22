<?php 
// src/Controller/LuckyController.php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


	class ComoquierasController extends AbstractController
	{
		private $datos = [];

	/**
    * @Route("/comoquieras/colacao")
	*/
		public function comoQuierasColaCao(){
			$datos[] = "Probando Symfony";
			$datos[] = "Pruebalo como quieras.";
			$datos[] = "Pruebalo cuando quieras.";
			$datos[] = "Pruebalo donde quieras.";
			$datos[] = "Pruebalo!";
			
			$color = $this->comoQuierasColor();
			
			return $this->render('comoquieras/comoquierascolacao.html.twig',	['cabecera'=>$datos[0],
					'texto'=>$datos[0],
					'color'=>$color,
					]);
		}	

		private function comoQuierasColor(){
			$hex = "ABCDEF0123456789";
			$color = "";
			for ($i=0; $i < 6; $i++) { 
				$color .= $hex[mt_rand(0, strlen($hex)-1)];
			}
			return $color;
		}
	}

 ?>