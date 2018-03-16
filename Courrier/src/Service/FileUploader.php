<?php 

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;



class FileUploader
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $app->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($app->getTargetDirectory(), $fileName);

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $app->targetDirectory;
    }
}
