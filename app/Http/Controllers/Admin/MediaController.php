<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function saveImage($product, $image)
    {
        if ($image) {
            $folderPath = config('media.image.path');
            $fileName = $this->saveFile($image, $folderPath);

            $this->saveToDb($product, $fileName);
        }

        return true;
    }

    public function saveFile($file, $folderPath)
    {
        $fileName = uuid_str($file->getClientOriginalName());
        $stream = file_get_contents($file);

        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        $filePath = $folderPath . $fileName;
        Storage::put($filePath, $stream);

        return $filePath;
    }

    public function saveToDb($product, $name)
    {
        return $product->medias()->create([
            'name' => $name
        ]);
    }
}
