<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        return redirect()->to('products?category=all');
    }

    public function products()
    {
        if($this->request->getVar('category'))
        {
            $cat = $this->request->getVar('category');
            $url = $cat !="all"?"https://fakestoreapi.com/products/category/$cat":"https://fakestoreapi.com/products";
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        $prodData = json_decode($res, true);
        $data['prodData'] = $prodData;
        return view('home', $data);
        
    }



    public function test()
    {
        $url = "https://fakestoreapi.com/products";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        $decodedText = html_entity_decode($res);        
        $productData = json_decode($decodedText, true);
        echo "<pre>";
        print_r($productData);
        echo "</pre>";
    }
}