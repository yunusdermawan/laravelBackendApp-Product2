<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Getting all data
    public function index() {
        $products = Product::all();

        return response()->json([
            "message" => "Product berhasil diambil",
            "code" => 200,
            "data" => $products
        ]);
    }

    // Getting data by id
    public function showDataById($id) {
        $products = Product::find($id);

        return response()->json([
            "message" => "Product berhasil diambil",
            "code" => 200,
            "data" => $products
        ]);
    }

    // Adding a data
    public function add(Request $request) {
        $cek = $request->validate([
            "nama" => "required",
            "desc" => "required",
            "harga" => "required|numeric",
        ]);

        $products = Product::create($cek);

        return response()->json([
            "message" => "Product berhasil ditambah",
            "code" => 200,
            "data" => $products
        ]);
    }
}
