<?php

namespace App\Http\Controllers;
use App\Item;
use App\ItemDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DownloadController extends Controller

{

    public function getdownload()
{

  
    $items= Item::all();
    $ItemDetails= ItemDetail::all();
    return view('multiuploads.download', compact('items', 'ItemDetails'));


}

    public function download($id)
    {
    

        $ItemDetails = ItemDetail::where('item_id', $id)->firstOrFail();
        $file_path = storage_path() . "/app/" . $ItemDetails->filename;
        $name = basename($file_path);
        return response()->download($file_path, $name);
            
    }

    
    public function delete($id)
    {
    
        
        $ItemDetails = ItemDetail::where('item_id', $id)->firstOrFail();
        $ItemDetails->delete();
        Storage::delete('$ItemDetails->filename');
        // Vai deletar o arquivo que está storage/app/nome-arquivo.jpg
        return response()->json(['data' => $ItemDetails],200);
        //return view('multiuploads.upload_form');
            
    }

// nao esta funcionando
public function downloadarquivo( $filename = '' )
    {
        // Check if file exists in app/storage/file folder
        $file_path = storage_path() . "/app/downloads/" . $filename;
        $headers = array(
            'Content-Type: csv',
            'Content-Disposition: attachment; filename='.$filename,
        );
        if ( file_exists( $file_path ) ) {
            // Send Download
            return \Response::download( $file_path, $filename, $headers );
        } else {
            // Error
            exit( 'Requested file does not exist on our server!' );
        }
    }


   



}