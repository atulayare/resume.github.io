<?php
session_start();
if(isset($_POST['submit'])){
    $template = $_POST['template'];

    if ($template == "Template1") {
       $_SESSION['templateUrl'] = 'resume1.php';
        header('Location: form.php');
    } else if ($template == "Template2") {
        $_SESSION['templateUrl'] = 'resume2.php';
        header("Location: form.php");
    } else {
        $_SESSION['templateUrl'] = 'resume.php';
        header("Location: form.php");
    }

}
?>