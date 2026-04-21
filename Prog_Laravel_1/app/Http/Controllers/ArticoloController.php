<?php
namespace App\Http\Controllers;
use App\Models\Articolo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class ArticoloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera tutti gli articoli
        $articoli = Articolo::all();
        // Passa gli articoli alla vista
        return view('articoli.index', compact('articoli'));
    }
    /**
     * Display the specified resource.
     */
    // Metodo per visualizzare un singolo articolo
    public function show($id)
    {
        // Recupera l'articolo per ID
        $articolo = Articolo::findOrFail($id);
        // Passa l'articolo alla vista
        return view('articoli.show', compact('articolo'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        // Recupera tutti gli articoli
        $articolo = Articolo::all();
        // Passa gli articoli alla vista
        return view('articoli.add', compact('articolo'));
    }
    
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required',
            'descrizione' => 'required'
        ]);

        // Insert nel database
        Articolo::create($validated);

        return redirect()->back()->with('success', 'Articolo salvato!');
    }
    /**


    * Show the form for editing the specified resource.
    */
    public function edit($id)
    {
        $articolo = Articolo::findOrFail($id);
        return view('articoli.edit', compact('articolo'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $articolo = Articolo::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'required',
            'descrizione' => 'required'
        ]);

        $articolo->update($validated);

        return redirect()->back()->with('success', 'Articolo aggiornato!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $articolo = Articolo::findOrFail($id);
        $articolo->delete();

        return redirect()->back()->with('success', 'Articolo eliminato!');
    }
}
?>