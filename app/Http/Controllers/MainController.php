<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MainController extends Controller
{
    public function index() {
        $posts = Post::all()->all();
        return view('witch/witch_main', compact('posts'));
    }

    public function about() {
        return view('witch/witch_about');
    }

    public function book() {
        return view('witch/witch_books');
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
