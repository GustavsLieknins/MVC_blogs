<?php

require "models/Blog.php";

class BlogController {
    public function index() {
        $posts = Blog::all();
        require "views/blog/index.view.php";
      }    
      
      public function show() {
        $post = Blog::find($_GET["id"]);
        require "views/blog/show.view.php";
      }
      
      public function create() {
        require "views/blog/create.view.php";
      }

      public function store() {
        // var_dump($_POST);
        $post = Blog::create($_POST["content"]);
        // $content = $_POST["content"];
        header("Location: /");
      }

      public function edit() {
        $post = Blog::find($_GET["id"]);
        require "views/blog/edit.view.php";
      }


      public function update() {
        $post = Blog::save($_POST["content"],$_POST["id"]);
        header("Location: /");
      }

      public function destroy()
      {
        $post = Blog::delete($_GET["id"]);
        header("Location: /");
      }
         
}
