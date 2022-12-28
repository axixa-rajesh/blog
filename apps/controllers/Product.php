<?php
class Product extends Controller
{
    public function index()
    {
        $alldata['data'] = [
            ['product_name' => 'Laptop', 'product_price' => '22000'],
            ['product_name' => 'keyBord', 'product_price' => '2000'],
        ];
       // $this->load->name = 'Rajesh';
        $this->load->view("product.index", $alldata, false);
        // $this->load->view("product.index", compact('data'));

        // $this->load->view("product.index",['data'=>$prodata]);
    }
    public function create()
    {
        echo "this is create controller";
    }
}
