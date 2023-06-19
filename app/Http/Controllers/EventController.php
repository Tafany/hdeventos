<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

  public function index()
  {
    // vou chamar todos os eventos aqui
    $events = Event::all();

    return view('welcome', ['events' => $events]);
  }


  public function create()
  {
    return view('events.create');
  }

  // action para tratar os dados e salva no banco

  public function store(Request $request)
  {
    //chama um objeto - Event pego do model 
    $event = new Event;

    // dados que vão ser preenchidos
    $event->title = $request->title;
    $event->city = $request->city;
    $event->private = $request->private;
    $event->description = $request->description;


    // image upload
    if ($request->hasFile('image') && $request->file('image')->isValid()) {

      $requestImage = $request->image;

      $extension = $requestImage->extension();

      //Nome relativo no banco ----- com esse metodo vou pegar o nome do arquivo e concatenar
      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      // salvar image no servidor
      $request->image->move(public_path('img/events'), $imageName);

      $event->image = $imageName;
    }

    // salva esses dados nos banco.
    $event->save();

    // salva o evento e redireciono o usuário para outra página.  Aqui vou coloar flash messages
    return redirect('/')->with('msg', 'Evento criado com sucesso!');
  }

  public function show($id)
  {
    $event = Event::findOrFail($id);

    return view('events.show', ['event' => $event]);
  }
}
