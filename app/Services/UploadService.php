<?php

namespace App\Services;

use Storage;

class UploadService
{
    public function __construct(\Illuminate\Contracts\Filesystem\Factory $storage)
    {
        $this->storage = $storage;
        $this->folder = 'uploads';
    }

    public function upload($disk, $image)
    {

        list($extension, $content) = explode(';', $image);
        $tmpExtension = explode('/', $extension);
        preg_match('/.([0-9]+) /', microtime(), $m);
        $fileName = sprintf('img%s%s.%s', date('YmdHis'), $m[1], $tmpExtension[1]);
        $content = explode(',', $content)[1];
        $storage = $this->storage->disk('local');
        $checkDirectory = $storage->exists($this->folder);
        if (!$checkDirectory) {
            $storage->makeDirectory($this->folder);
        }

        $storage->put($this->folder . '/' . $fileName, base64_decode($content));

        return $fileName;
    }

}
