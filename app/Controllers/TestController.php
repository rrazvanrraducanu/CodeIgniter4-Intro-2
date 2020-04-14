<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
class TestController extends Controller
{
   public function index(){
          //$data['nume']="Popescu Bogdan";
        $data=[
            "nume"=>"Popescu",
            "prenume"=>"Bogdan"
        ];
           return view('test_view',$data);
        }
        public function index1(){
          $data['val']=array("Popescu", "Bogdan", "Matematica");
          return view('test_view1',$data);
      }
}
