<?php

namespace App\Http\Controllers;
use App\Item;
use App\ItemDetail;
use Illuminate\Http\Request;



class UploadController extends Controller

{

public function uploadForm()

{

return view('multiuploads.upload_form');

}

//@param Request $request A instância do request.

public function uploadSubmit(Request $request)

{

$this->validate($request, [

'name' => 'required',

'photos'=>'required',

]);

// Se informou o arquivo, retorna um boolean
if($request->hasFile('photos'))

{

$allowedfileExtension=['pdf','jpg','png','docx'];

$files = $request->file('photos');

//Recuperar algumas informações do arquivo:
foreach($files as $file){

//// Retorna o nome original do arquivo
$filename = $file->getClientOriginalName();
//// Extensão do arquivo
$extension = $file->getClientOriginalExtension();

$check=in_array($extension,$allowedfileExtension);

//dd($check);

if($check)

{

$items= Item::create($request->all());

foreach ($request->photos as $photo) {

    //upload de arquivos no laravel
$filename = $photo->store('photos');

ItemDetail::create([

'item_id' => $items->id,

'filename' => $filename

]);

}

echo "Upload Successfully"; 

}

else

{

echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';

}

}

}

}

}