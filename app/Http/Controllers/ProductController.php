<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = $this->getProducts();
        return view(
            'product.index',
            ['products' => $products]
        );
    }

    public function create()
    {
        return view(
            'product.create',
        );
    }

    public function store(Request $request)
    {
        // echo "你已經創建一個新的商品";
        return redirect()->route('products.index');

    }

    function show($id, Request $request)
    {

        $products = $this->getProducts();

        $index = $id - 1;

        if ($index < 0 || $index >= count($products)) {
            abort(404);
        };

        $product = $products[$index];
        return view(
            'product.show',
            ['product' => $product]
        );
    }


    public function edit($id)
    {
        $products = $this->getProducts();

        $index = $id - 1;

        if ($index < 0 || $index >= count($products)) {
            abort(404);
        };

        $product = $products[$index];
        return view(
            'product.edit',
            ['product' => $product]
        );
    }

    public function update(Request $request, $id)
    {
        // $method = $request->method();
        // echo "update   $method";
        $products = $this->getProducts();

        $index = $id - 1;

        if ($index < 0 || $index >= count($products)) {
            abort(404);
        };

        $product = $products[$index];
        
        return redirect()->route('products.index',['product' => $product['id'] ]);
    }

    public function destroy($id)
    {
        // echo "destroy";
        return redirect()->route('products.index');
    }
    private function getProducts()
    {
        return  [
            [
                'id' => 1,
                'imgUrl' => asset('images/sky_tree.jpg')
            ],
            [
                'id' => 2,
                'imgUrl' => asset('images/tokyo_tower.jpg')
            ]
        ];
    }
}
