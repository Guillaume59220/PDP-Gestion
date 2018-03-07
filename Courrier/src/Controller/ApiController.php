<?php

namespace Courrier\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Courrier\Domain\Courrier;

class ApiController {

    public function getCourriersAction(Application $app) {
        $courriers = $app['dao.courrier']->findAll();

        $responseData = array();
        foreach ($courriers as $courrier) {
            $responseData[] = $this->buildCourrierArray($courrier);
        }
        // Create and return a JSON response
        return $app->json($responseData);
    }



    public function getCourrierAction($id, Application $app) {
        $courrier = $app['dao.courrier']->find($id);
        $responseData = $this->buildCourrierArray($courrier);
        // Create and return a JSON response
        return $app->json($responseData);
    }


    public function addCourrierAction(Request $request, Application $app) {
        // Check request parameters
        if (!$request->request->has('date_entre')) {
            return $app->json('Missing required parameter: ', 400);
        }
        if (!$request->request->has('annotation')) {
            return $app->json('Missing required parameter: ', 400);
        }
        if (!$request->request->has('scan')) {
            return $app->json('Missing required parameter: ', 400);
        }
        if (!$request->request->has('fax')) {
            return $app->json('Missing required parameter: ', 400);
        }


        $courrier = new Courrier();
        $courrier->setDateEntre($request->request->get('date_entre'));
        $courrier->setDateSortie($request->request->get('date_sortie'));
        $courrier->setAnnotation($request->request->get('annotation'));
        $courrier->setscan($request->request->get('scan'));
        $courrier->setFax($request->request->get('fax'));
        $app['dao.courrier']->save($courrier);
        $responseData = $this->buildCourrierArray($courrier);
        return $app->json($responseData, 201);  // 201 = Created
    }


    private function buildCourrierArray(Courrier $courrier) {
        $data  = array(
            'id_courrier' => $courrier->getIdCourrier(),
            'id_client' => $courrier->getIdClient(),
            'id_type_courrier' => $courrier->getIdTypeCourrier()
            );
        return $data;
    }
}
