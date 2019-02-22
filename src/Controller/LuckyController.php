<?php
// src/Controller/LuckyController.php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LuckyController extends AbstractController
{
	/**
    * @Route("/comoquieras/numero")
	*/
    public function numero()
    {
        $number = random_int(0, 100);

//        return new Response(
//           '<html><body>Lucky number: '.$number.'</body></html>'
//        );
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}
?>