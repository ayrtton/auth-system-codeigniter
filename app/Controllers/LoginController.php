<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller {
    public function index() {
        echo view('login');
    }
}
