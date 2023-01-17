<?php


class Signup extends Controller
{
    function index()
    {
        echo "<pre>";
        print_r($_POST);

        if ($_POST > 0) {
            $user = new user();

            if ($user->validate($_POST)) {

                $this->redirect('login');
            } else {
                //errors
                $user->errors = $user->errors;
            }
        }

        print_r($user->errors);
        $this->view('Signup');
    }
}
