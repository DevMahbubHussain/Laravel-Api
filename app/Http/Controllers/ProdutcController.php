<?php

namespace App\Http\Controllers;

use App\Models\Produtc;
use Illuminate\Http\Request;

class ProdutcController extends Controller
{
    public function index()
    {
        return response()->json(Produtc::get());
    }
    public function store(Request $request)
    {
        Produtc::create($request->only(['title', 'price']));
    }
    public function show($id)
    {
        return response()->json(
            Produtc::find($id)
        );
    }
    // public function update(Request $request, $id)
    // {
    //     Produtc::find($id)->update($request->only(['title', 'price']));
    // }
    public function delete($id)
    {
        Produtc::find($id)->delete();
    }
}
