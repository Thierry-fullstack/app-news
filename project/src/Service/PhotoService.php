<?php

namespace App\Service;


use Exception;
use RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PhotoService
{
    public const string PHOTO_PATH = 'portraits';
    private ParameterBagInterface $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    /**
     * @param UploadedFile $picture
     * @param String $name
     * @param string $folder
     * @param int|null $width
     * @param int|null $height
     * @return string
     * @throws Exception
     */
    public function add(UploadedFile $picture, string $name, string $folder = '', ?int $width = 250, ?int $height = 250): string
    {
        $fichier = $name . '.webp';
        $picture_infos = getimagesize($picture);
        if($picture_infos === false){
            throw new Exception('Format d\'image incorrect');
        }

        switch($picture_infos['mime']){
            case 'image/png':
                $picture_source = imagecreatefrompng($picture);
                break;
            case 'image/jpeg':
                $picture_source = imagecreatefromjpeg($picture);
                break;
            case 'image/webp':
                $picture_source = imagecreatefromwebp($picture);
                break;
            default:
                throw new Exception('Format d\'image incorrect');
        }

        $imageWidth = $picture_infos[0];
        $imageHeight = $picture_infos[1];

        switch ($imageWidth <=> $imageHeight){
            case -1: // portrait
                $squareSize = $imageWidth;
                $src_x = 0;
                $src_y = ($imageHeight - $squareSize) / 2;
                break;
            case 0: // carré
                $squareSize = $imageWidth;
                $src_x = 0;
                $src_y = 0;
                break;
            case 1: // paysage
                $squareSize = $imageHeight;
                $src_x = ($imageWidth - $squareSize) / 2;
                $src_y = 0;
                break;
        }

        $resized_picture = imagecreatetruecolor($width, $height);
        imagecopyresampled($resized_picture, $picture_source, 0, 0, $src_x, $src_y, $width, $height, $squareSize, $squareSize);

        $path = $this->params->get('images_directory') . $folder;

        if(!file_exists($path . '/mini/')){
            if (!mkdir($concurrentDirectory = $path . '/mini/', 0755, true) && !is_dir($concurrentDirectory)) {
                throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
        }
        imagewebp($resized_picture, $path . '/mini/' . $width . 'x' . $height . '-' . $fichier);

        $picture->move($path . '/', $fichier);
        return $fichier;
    }

    /**
     * @param string $fichier
     * @param string|null $folder
     * @param int|null $width
     * @param int|null $height
     * @return bool
     */
    public function delete(string $fichier, ?string $folder = '', ?int $width = 250, ?int $height = 250): bool
    {
        if($fichier !== 'default.webp'){
            $success = false;
            $path = $this->params->get('image_directory') . $folder;

            $original = $path . '/' . $fichier;

            if(file_exists($original)){
                unlink($original);
                $success = true;
            }

            $mini = $path . '/mini/' . $width . 'x' . $height . '-' . $fichier;
            if(file_exists($mini)){
                unlink($mini);
                $success = true;
            }
        }
        return $success;
    }
}
