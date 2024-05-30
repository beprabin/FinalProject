<?php

class Controller
{
    public function hero()
    {
        include __DIR__ . "/../template/hero.php";
    }
    public function navbar()
    {
        include __DIR__ . '/../template/layout/navbar.php';
    }
    public function home()
    {
        include __DIR__ . "/../template/layout/home.php";
    }
    public function aboutus()
    {
        include __DIR__ . '/../template/layout/aboutus.php';
    }
    public function footer()
    {
        include __DIR__ . '/../template/layout/footer.php';
    }

    public function notFound()
    {
        include __DIR__ . "/../template/error/error404.php";
        exit;
    }

    public function error505($errorMessage = "Internal Server Error")
    {
        include __DIR__ . "/../home/error/error505.php";
        echo "500 Internal Server Error: " . $errorMessage;
        exit;
    }
}
