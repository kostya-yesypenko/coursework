<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MainController extends Controller
{
    public function index() {
        return view('witch/witch_main');
    }

    public function about() {
        return view('witch/witch_about');
    }

    public function recipes() {
        return view('witch/witch_recipes');
    }
    public function ask() {
        if(isset($_POST["form_submit"])){
            // отримання даних
            $name = $_POST["name"];
            $email = $_POST["email"];
            $question = $_POST["question"];
            // перевірка
            if(empty($name) || empty($email) || empty($question)){
                echo "Не всі поля заповнені";
            }
            else{
                $to = 'kostaesipenko120@gmail.com';
                $subject = "Питання від " . $name;
                $message = "Ім'я: " . $name . "\r\n";
                $message .= "Email: " . $email . "\r\n";
                $message .= "Питання: " . $question . "\r\n";

                $headers = "From: " . $email . "\r\n";
                $headers .= "Reply to: " . $email . "\r\n";
                $headers .= "X-Mailer: PHP/ " . phpversion();

                mail($to, $subject, $message, $headers);


            }
        }
        return redirect()->route('witch.index');
    }
}
