<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flashcard;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;

class FlashcardController extends Controller
{
    // Ajouter une flashcard
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $flashcard = Flashcard::create($validator->validated());

        return response()->json($flashcard, 201);
    }

    // Modifier une flashcard
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $flashcard = Flashcard::findOrFail($id);
            $flashcard->update($validator->validated());

            return response()->json($flashcard, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Flashcard not found.'], 404);
        }
    }

    // Supprimer une flashcard
    public function destroy($id)
    {
        try {
            $flashcard = Flashcard::findOrFail($id);
            $flashcard->delete();

            return response()->json(['success' => 'Flashcard is deleted.'], 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Flashcard not found.'], 404);
        }
    }
}
