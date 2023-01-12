<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index() {
        return view('places.index');
    }

    public function createForm() {
        return view('places.createForm');
    }

    public function editForm($id) {
        $place = Place::find($id);

        return view('places.editForm', compact('place'));
    }

    public function getAll() {
        $places = Place::all();

        return view('places.allPlaces', compact('places'));
    }

    public function storePlace(Request $request) {
        $place = Place::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
        ]);

        return redirect('/places');
    }

    public function getPlaceById($id) {
        $place = Place::find($id);
        
        return view('places.place', compact('place'));
    }

    public function updatePlace(Request $request, $id) {
        $place = Place::find($id);

        $place->name = $request->name;
        $place->description = $request->description;
        $place->address = $request->address;

        $place->save();

        # Outro jeito: Place::where('id', $id)->update(['name' => $request->name, 'description' => $request->description, 'address' => $request->address ]);

        return redirect('/places');
    }

    public function deletePlace($id) {
        Place::where('id', $id)->delete();

        # Também pode ser deletada pelo metodo Place::destroy($id);

        return redirect('/places');
    }
}
