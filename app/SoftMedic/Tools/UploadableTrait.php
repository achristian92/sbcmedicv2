<?php

namespace App\SoftMedic\Tools;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadableTrait
{
    public function handleUploadedImage(UploadedFile $file, $folder = 'general', $disk = 'public')
    {
        $nameSlug = Str::slug($file->getClientOriginalName());
        $name = Str::of($nameSlug)->basename($file->clientExtension());
        $filename = $name . '-' . Str::random(4) . '.' . $file->clientExtension();
        $filePath = "$folder/" . $filename;

        Storage::disk('s3')->put($filePath, file_get_contents($file), $disk);

        return Storage::disk('s3')->url($filePath);
    }
}
