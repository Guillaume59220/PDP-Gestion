<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 16/03/2018
 * Time: 15:00
 */

namespace Courrier\Controller;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DownloadController
{

    public function downloadAction($filename){
        $file = '../uploads/Scans/'.$filename;
        $response = new BinaryFileResponse($file);

        return $response;
    }

}