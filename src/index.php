<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>String</title>
</head>

<body>

    <?php
    $text = $_POST['text'];
    if ($_POST['case'] == "Uper Case") {
        $_SESSION['text'] = strtoupper($text);
        // echo  . '<br>';
    } else {
        $_SESSION['text'] = strtolower($text);
        // echo  . "<br>";
    }
    ?>

    <div style="padding:10% ;">
        <form action="" method="post" >
            <div class="mb-3">
                <label for="textfield" class="form-label">Textarea</label>
                <textarea class="form-control" name="text" id="textfield" rows="3"><?= $_SESSION['text'] ?></textarea>
            </div>
            <input type="submit" class="btn btn-primary" name="case" value="Uper Case">
            <input type="submit" class="btn btn-primary" name="case" value="Lower Case">

        </form>

        <?php
        echo "Number of characters are :" . strlen($text) . ' and number of words are :' . str_word_count($text);
        ?>
    </div>
</body>

</html>