<?php

  if(isset($_POST["captcha"])) {
    session_start();
    $digit = $_SESSION['digit'];
    $captcha = $_POST['captcha'];

    if ($digit == $captcha) {
        header('Location: ./Login.php'); 
        $_SESSION['error'] = 'sucesso';
    } else {
        header('Location: ./prova.php'); 
        echo "ERROr";
        $_SESSION['error'] = '404';
    }
  }

?>
<!DOCTYPE html>
<html>
<!--
<head>
  <title>HTML Reference</title>
</head>

<body>
<? 
/*echo "$digit";
echo "$captcha";
*/
?>
The content of the document......
</body>

</html>-->
