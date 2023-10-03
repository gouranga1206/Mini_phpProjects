<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserDisplay</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">   
        <h1>Display Your Name:</h1>
        <h1>
            <?php 
                if (isset($_POST['submit'])) {
                    if (!empty($_POST['name'])) {
                        echo "Your Name is: " . $_POST['name'] . "!";
                    } else {
                        echo "No data submitted!";
                    }
                }
            ?>
        </h1>

        <div class="form_container">
            <form action="./index.php" method="POST">
                <label>Enter your name</label>
                <input type="text" name="name" id="name">
                <input type="submit" name="submit" value="Submit" id="submit">
            </form>
        </div>
    </div>
</body>
</html>
