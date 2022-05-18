<?php

namespace Devdojo\Calculator;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;

class UploadFile
{
    //
    // public function index()
    // {
    //     return view('add');
    // }

    public function uploadFile(Request $request)
    {
        if ($request->hasFile('image')) {
            $file_name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $request->image->getClientOriginalExtension();
            $name_slug = Str::slug($file_name, '_');
            $name_image = $name_slug . '_' . time() . '.' . $extension;
            $path = public_path('/');
            $request->file('image')->move($path, $name_image);
        }
        // return $request;
        // return redirect(url('select_file'));
    }
}
