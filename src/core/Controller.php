<?php
abstract class  Controller {
    protected $layout = "base";

    public function renderView(string $view, array $data = [] ): void {
        extract($data);
        ob_start();
        require_once "../views/$view.html.php";
        $contentForView = ob_get_clean();
        require_once "../views/layout/$this->layout.layout.html.php";
    }
    
    public function renderJson(array $data) {
        echo json_encode($data);
    }

    public function redirectToRoot(string $url){
        header("Location:".WEBROOT."/?$url");
        exit;
    }
    
    public function path(string $ressource, string $controller, string $action){
        return WEBROOT."/?ressource=$ressource&controller=$controller&action=$action";
    }
    
}