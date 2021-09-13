<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class HomeController extends Controller{

        // menampilkan index pertama
        public function index(){
            return 'Selamat Datang';
        }

    }
?>