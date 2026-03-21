<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend>Color</legend>
            <label>
                Red
                <input type="radio" name="color" value="red"/>
            </label>

            <label>
                Green
                <input type="radio" name="color" value="green"/>
            </label>

            <label>
                Blue
                <input type="radio" name="color" value="blue"/>
            </label>
        </fieldset>

        <fieldset>
            <legend>Size</legend>
            <select name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Font style</legend>
            <label>
                Bold
                <input type="checkbox" name="font-style-bold" value="bold"/>
            </label>

            <label>
                Italic
                <input type="checkbox" name="font-style-italic" value="italic"/>
            </label>
        </fieldset>


        <button type="submit">Submit</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = $_POST['color'] ?? 'initial';
    $size = $_POST['size'] ?? 'initial';
    $fontWeight = $_POST['font-style-bold'] ?? 'normal';
    $fontStyle = $_POST['font-style-italic'] ?? 'normal';
    $html = <<<END
    <div style="color: {$color}; font-size: {$size}; font-weight: {$fontWeight}; font-style: {$fontStyle};">
        Lorem ipsum
    </div>
END;
    echo $html;
}
?>
</body>
</html>
