<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public static $products = [
        ["id" => "1", "name" => "TV", "description" => "Best TV", "price" => 499.99],
        ["id" => "2", "name" => "iPhone", "description" => "Best iPhone", "price" => 999.99],
        ["id" => "3", "name" => "Chromecast", "description" => "Best Chromecast", "price" => 49.99],
        ["id" => "4", "name" => "Glasses", "description" => "Best Glasses", "price" => 199.99]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = ProductController::$products;

        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        $viewData = [];

        // Validate if ID is valid
        if (!isset(ProductController::$products[$id - 1])) {
            return redirect()->route('home.index'); // Redirect to home page
        }

        $product = ProductController::$products[$id - 1];
        $viewData["title"] = $product["name"] . " - Online Store";
        $viewData["subtitle"] = $product["name"] . " - Product information";
        $viewData["product"] = $product;

        return view('product.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData", $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0"
        ]);

        // dd($request->all());
        return redirect()->route('product.created');
    }

        public function created()
    {
        return view('product.created');
    }
}

