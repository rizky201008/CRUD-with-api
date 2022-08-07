<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;

class NoteController extends Controller
{
    public function add(Request $r)
    {
        $add = Note::create(['nama' => $r->nama, 'jenis_kelamin' => $r->jenis_kelamin, 'kelas' => $r->kelas, 'telepon' => $r->telepon]);
        if ($add) {
            return response()->json(['status' => 'ok', 'message' => "Tambah data sukses"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Tambah data gagal"]);
        }
    }
    public function update(Request $r)
    {
        $data = ['nama' => $r->nama, 'jenis_kelamin' => $r->jenis_kelamin, 'kelas' => $r->kelas, 'telepon' => $r->telepon];
        $update = Note::where('id', $r->id)->update($data);
        if ($update) {
            return response()->json(['status' => 'ok', 'message' => "Ubah data sukses"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Ubah data gagal"]);
        }
    }
    public function delete(Request $r)
    {
        $delete = Note::where('id', $r->id)->delete();
        if ($delete) {
            return response()->json(['status' => 'ok', 'message' => "Hapus data sukses"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Hapus data gagal"]);
        }
    }
    public function view()
    {
        $data = Note::all();
        $json = [
            'status' => 'ok',
            'data' => $data
        ];
        return response()->json($json);
    }
}
