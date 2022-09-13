<?php 
// check auth
function check(){
  if (isset($_SESSION['username'])) {
    return $_SESSION['username'];

  } else {
    header('Location: ../login_form.php');
  }
}