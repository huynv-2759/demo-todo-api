<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;

trait UploadImage
{

    /**
     * Parse response format
     *
     * @param  array $data
     * @param  string $statusCode
     * @return JsonResponse
     */
    public function uploadImage($image)
    {
        if ($image != null) {
            $fileExtension = $image->getClientOriginalExtension();
            $fileName = md5(time()) . rand(0,100000) . '.' . $fileExtension;
            $uploadPath = public_path('/upload'); // Thư mục upload
            // Bắt đầu chuyển file vào thư mục
            $image->move($uploadPath, $fileName);
            return '/upload/' . $fileName;
        }
        return null;
    }
    public function uploadArrayImage($ls_image)
    {
        $array1 = [];
        if ($ls_image) {
            foreach ($ls_image as $image) {
                $array1[] = $this->uploadImage($image);
            }
        }
        if (count($array1) > 0) {
            return json_encode($array1);
        }
        return null;
    }
    public function uploadFile($file)
    {
        if ($file != null) {
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = md5(time()) . rand(0,100000) . '.' . $fileExtension;
            $uploadPath = public_path('/file'); // Thư mục upload
            // Bắt đầu chuyển file vào thư mục
            $file->move($uploadPath, $fileName);
            return '/file/' . $fileName;
        }
        return null;
    }
}
