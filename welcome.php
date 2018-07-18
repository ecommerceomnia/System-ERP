<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Tudo certo, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Conseguimos logar.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sair do sistema.</a></p>
</body>
</html>