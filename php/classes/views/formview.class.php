<?php
namespace views;

class FormView extends \mvc\View {

    public function getHTML(){
        $output = "<h3>Dit is de form pagina.</h3><br>";
        $output .= "<form method='post' action='formresult'>";
        $output .= "<label for='voornaam'>Voornaam</label><input type='text' id='voornaam' name='voornaam'><br>";
        $output .= "<label for='achernaam'>Achternaam</label><input type='text' id='achernaam' name='achernaam'><br>";
        $output .= "<label for='woonplaats'>Woonplaats</label><input type='text' id='woonplaats' name='woonplaats'><br>";
        $output .= "<input value='Submit' type='submit'>";
        $output .= "</form>";
        return $output;
    }
}
?>