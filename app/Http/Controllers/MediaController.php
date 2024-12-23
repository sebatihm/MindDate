<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index(){
        $data = Media::all();

        return response()->json([
            'data' => $data
        ],201);
    }
    
    public function show($id){
        $media = Media::FindOrFail($id);

        return response()->json([
            'data' => $media,
            'status' => 'success'
        ],201);
    }

    public function store(Request $request){
        $url = Storage::put('media', $request->file('file') );
        $data= $request->user()->media()->create([
            'url' => $url
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $data
        ],201);

    }

    public function destroy($id){
        $media = Media::FindOrFail($id);
        $media->delete();

        return response()->json([
            'status' => 'success'
        ],201);
    }
    
}
