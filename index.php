<?php
    if(isset($_POST['submit']))
    {
        header('Location:read.php');
    };

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF viewer ❤️</title>
    <style>
        * {
            font-family: sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        button {
            height: 50px;
            width: 220px;
            background-color: crimson;
            border: 1px solid black;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="hero">
                <h1>Read Pdfs using PHP Script 🚀🚀🔥🔥</h1>
            </div>
        </div>
            <br><br><br><br>
            <div class="wrapper">
                <img src="./download.jpeg" alt="Jonah Cv" class="img" height="300px" width="200px">
            </div>
            <br><br><br>
            <div class="wrapper">
                <form method="POST">
                    <button type="submit" name="submit" value="submit">Read PDF</button>
                </form>
            </div>
            <div class="wrapper">
                <h3>Made with <span>❤️</span>by Jonah Wakahiu</h3>
            </div>
       
    </div>
</body>
</html>