<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use App\Models\Service;

class AdminService_Update extends Controller
{
    /**
     * Update upload the admin update service file.
     */
    public function UploadFile(UploadedFile $file, $folder = null, $disk = 'public', $filename = null)
    {
        $FileName = !is_null($filename) ? $filename : Str::random(10);
        return $file->storeAs(
            $folder,
            $FileName . "." . $file->getClientOriginalExtension(),
            $disk
        );
    }

    /**
     * Update the admin update service.
     */
    public function update_store(Request $request, $id)
    {

        $service_item = Service::find($id);

        $path = $this->UploadFile($request->file('file'), 'Service_image');
        $service_item->update([
            'name' => $request->name,
            'text' => $request->text,
            'price' => $request->price,
            'file_path' => $path,
        ]);
        return redirect()->route('admin.customize_service')->with('success', 'File Uploaded Successfully');
 
    }

    /**
     * Display the admin update service.
     */
    public function update (Request $request, $id) {

        $service_item = Service::find($id);

        $context = [
            "service_item"=> $service_item,
            "service_id"=> $id
        ];

        return view('admin.admin_update_service', $context);
    }

}
