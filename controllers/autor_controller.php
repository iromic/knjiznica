<?php
  class AutorController {
    public function index() {
      // we store all the posts in a variable
      $autor = Autor::all();
      require_once('views/autor/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id1']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $autor = Autor::find($_GET['id1']);
      require_once('views/autor/show.php');
    }
	public function deleteautor() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id1']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $autor = Autor::deleteautor($_GET['id1']);
      require_once('views/autor/delete.php');
    }
  }
?>