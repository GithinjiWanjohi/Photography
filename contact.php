<html>
<head>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>
<body>


<?php
include ("connect.php");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

    $sql = "INSERT INTO `messages`( `name`, `email`, `message`) VALUES ('$name', '$email','$message')";
    global $db;
    $result = $db->query($sql) or trigger_error($db->error . "[$sql]");
    ?>


<?php
    if ($result) {
       ?>
        <script>
            swal({   title: "Success", text: "Message sent successfully!",type: "success", timer: 1500, showConfirmButton: false });
            setTimeout(function(){location.href="index.php"} , 1000);
        </script>
<?php
       //header("Location:index.php");
    } else {
        ?>
        <script>
            swal({   title: "Error", text: "Message not sent!",type: "error", timer: 1500, showConfirmButton: false });
            setTimeout(function(){location.href="index.php"} , 1000);
        </script>
<?php

       // header("Location:index.php");

    }
    ?>
</body>
</html>