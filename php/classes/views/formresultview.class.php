<?php
namespace views;

class FormResultView extends \mvc\View {

    public function getHTML(){
        $output = "<h1>";
        $output .= !empty($this->model->getData("voornaam")) ? ("Hallo " . $this->model->getData("voornaam")) : "Hallo gebruiker";
        $output .= !empty($this->model->getData("achternaam")) ? (" " . $this->model->getData("achternaam")) : "";
        $output .= !empty($this->model->getData("woonplaats")) ? (" uit " . $this->model->getData("woonplaats")) : "";
        $output .= "</h1>";
        return $output;
    }
}
?>