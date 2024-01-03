<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</head>
<body>
    
    <div class="container mt-5">
        <h1>Обратная связь</h1>
        <form action="send_message.php" method="post">
            <input type="text" name="username" placeholder="Имя" class="form-control mt-4" value="<?=isset($_SESSION['username'])?>">
            <div class="text-danger"><?=isset($_SESSION['error_username'])?></div><br>
            <input type="email" name="email" placeholder="Email" class="form-control" value="<?=isset($_SESSION['email'])?>">
            <div class="text-danger"><?=isset($_SESSION['error_email'])?></div><br>
            <input type="text" name="subject" placeholder="Тема сообщения" class="form-control" value="<?=isset($_SESSION['subject'])?>">
            <div class="text-danger"><?=isset($_SESSION['error_subject'])?></div><br>
            <textarea name="message" placeholder="Текст сообщения" class="form-control"><?=isset($_SESSION['message'])?></textarea>
            <div class="text-danger"><?=isset($_SESSION['error_message'])?></div><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
    
</body>
</html>