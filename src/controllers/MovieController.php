<?php
namespace src\controllers;

use \core\Controller;

class MovieController extends Controller {

    public function movie() {
        $this->render('movie', ['nome' => 'Bonieky']);
    }

    public function newMovie() {
        echo "cria movie";
    }

    public function movieList($param) {
        echo "lista movie </br>";
        print_r($param);
    }

}