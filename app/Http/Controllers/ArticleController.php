<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class ArticleController extends Controller{

        // menampilkan article pertama
        public function article($id){
            return 'Halaman Artikel dengan Id = '.$id;
        }

    }
?>