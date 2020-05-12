<?php
namespace views;

class HomeView extends \mvc\View {
    public function getHTML(){
        $output = "<h1>Dit is de home pagina.</h1>";
        return $output;
    }
}
?>