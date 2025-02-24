<?php

class WelcomeController extends BaseController {
    public function welcome() {
        $this->view('welcome/welcome');
    }

    public function login() {
        $this->view('pages/login-v2');
    }
    
    public function loginPost() {
        $this->view('pages/login');
    }
    
    public function register() {
        $this->view('pages/register');
    }
}