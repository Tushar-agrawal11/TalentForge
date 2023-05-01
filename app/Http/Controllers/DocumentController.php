<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Document;

class DocumentController extends Controller
{

    public function index(){
        return view('book',[
            'heading' => 'Book',
            'documents' => Document::all()
        ]);
    }
    public function download($id)
    {
        $document = Document::findOrFail($id);
        $filePath = $document->path;
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $document->name . '"'
        ];
        return response()->download($filePath, $document->name, $headers);
    }

    public function showFile($id)
{
    $document = Document::findOrFail($id);
    $path = $document->path;
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = response($file, 200)->header('Content-Type', $type);
    return $response;
}
    
}
