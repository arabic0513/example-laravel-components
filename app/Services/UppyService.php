<?php


namespace App\Services;

class UppyService
{

    /**
     * Move File to Path in Config
     *
     * @param $request
     * @return bool
     */
    public function uploadImage($request): bool
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move(public_path(config('uppy.upload_file')), $fileName);
        }
        return is_callable($filePath);
    }
}
