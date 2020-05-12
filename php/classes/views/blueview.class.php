<?php
	namespace views;
	
	class BlueView extends \mvc\View {
		public function getHTML(){
            return "<h1>" . $this->model->getData("redirect") . "</h1>";
        }
    }
?>