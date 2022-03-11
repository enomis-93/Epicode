<?php
    require 'connect.php';
    
    $pdo = connect(); 
    $queryRes = $pdo->query('SELECT * FROM users;');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User Salvati</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Database</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="create_user_form.php">Crea User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="get_users.php">Lista User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create_post_form.php">Crea Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="get_posts.php">Lista post</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</header>   
<div class="container my-3">
    <h2 class="text-center">Lista utenti registrati</h2>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID:</th>
                    <th scope="col">Name:</th>
                    <th scope="col">Email:</th>
                    <th scope="col">Password:</th>
                    <th scope="col">ID ruolo:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($queryRes as $user) {
                        echo "
                            <tr>
                                <td class='fw-bold'>{$user["id"]}</td>
                                <td>{$user["first_name"]}</td>
                                <td>{$user["email"]}</td>
                                <td>{$user["password"]}</td>
                                <td>{$user["role_id"]}</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
    </table>
</div >
    
</body>
</html>