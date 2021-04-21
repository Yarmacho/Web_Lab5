<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getProduct($productId)
    {
        $prod = new Test($productId);
        return view('productInfo', ['product' => $prod->get()]);
    }

    public function formValidation(Request $request)
    {
        if ($request->isMethod('post'))
        {
            return view('formResult', ['obj' => $request->input('text')]);
        }
        if ($request->isMethod('get'))
        {
            return view('form');
        }
    }


    public function statements()
    {
        $products = [(new Test(0))->get(), (new Test(1))->get(),(new Test(2))->get()];

        return view('statements', ['products'=>$products, 'title'=>$this->generateRandomString(5), 'content' => $this->generateRandomString(40)]);
    }

    private function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
