<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;

class NoteController extends Controller
{
    public function add(Request $request)
    {
        $validated = $request->validate([
            'uid' => "required",
            'name' => "required",
            'phone' => "required",
            'address' => "required",
        ]);
        $add = Note::create($validated);
        if ($add) {
            return response()->json(['message'=>"Data Berhasil Diupdate"], 200);
        } else {
            return response()->json(['message' => "Data Gagal Diupdate"], 400);
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $delete = Note::where('id',$id)->delete();
        if ($delete) {
            return response()->json(['message' => "Data Berhasil Dihapus"],200);
        } else {
            return response()->json(['message' => "Data Gagal Dihapus"], 400);
        }
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'uid' => "required",
            'name' => "required",
            'phone' => "required",
            'address' => "required",
        ]);
        $update = Note::where('id', $request->id)->update($validated);
        if ($update) {
            return response()->json(['message' => "Data Berhasil Diupdate"], 200);
        } else {
            return response()->json(['message' => "Data Gagal Diupdate"], 400);
        }
    }
}
