<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class VideoService
{
    public function renameUploadVideoFile(UploadedFile $uploadedFile,string $directory): string
    {
        $newVideoName = uniqid(more_entropy: true) . ".{$uploadedFile->guessClientExtension()}";
        $uploadedFile->move($directory,$newVideoName);
        return $newVideoName;
    }
}
