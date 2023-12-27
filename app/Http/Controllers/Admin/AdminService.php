<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use App\Models\Service;

class AdminService extends Controller
{
    public function UploadFile(UploadedFile $file, $folder = null, $disk = 'public', $filename = null)
    {
        $FileName = !is_null($filename) ? $filename : Str::random(10);
        return $file->storeAs(
            $folder,
            $FileName . "." . $file->getClientOriginalExtension(),
            $disk
        );
    }

    public function deleteFile($path, $disk = 'public')
    {
        Storage::disk($disk)->delete($path);
    }

    public function store(Request $request)
    {

        $path = $this->UploadFile($request->file('file'), 'Service_image');
        Service::create([
            'name' => $request->name,
            'text' => $request->text,
            'price' => $request->price,
            'file_path' => $path,
        ]);
        return redirect()->route('admin.service')->with('success', 'File Uploaded Successfully');
 
    }
    
    public function service () {
        return view('admin.admin_add_service');
    }
}
