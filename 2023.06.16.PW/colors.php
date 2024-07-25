<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color`s Text</title>
</head>

<body>
    <div style="margin: 5px;">
        <form method="post">
            <div style="margin: 5px;">
                <div>
                    <label for="R_input">R:</label>
                </div>
                <input id="R_input" name="R" type="number" min="0" max="255" step="1" required/>
            </div>
            <div style="margin: 5px;">
                <div>
                    <label for="G_input">G:</label>
                </div>
                <input id="G_input" name="G" type="number" min="0" max="255" step="1" required/>
            </div>
            <div style="margin: 5px;">
                <div>
                    <label for="B_input">B:</label>
                </div>
                <input id="B_input" name="B" type="number" min="0" max="255" step="1" required/>
            </div>
            <div style="margin: 5px;">
                <input style="margin-top: 5px;" type="submit" name="submit" value="Color" />
            </div>
        </form>
        <div style="margin: 50px;">
            <?
            $text = $_SERVER['SERVER_PROTOCOL'];
            $color = '';
            $backgroundColor = '';
            if (isset($_POST["submit"]))
            {
                $R = $_POST['R'];
                $G = $_POST['G'];
                $B = $_POST['B'];

                $R_a = 255 - $R;
                $G_a = 255 - $G;
                $B_a = 255 - $B;

                $color = "rgb($R, $G, $B)";
                $backgroundColor = "rgb($R_a, $G_a, $B_a)";
            }
            else
            {
                $color = "SteelBlue";
                $backgroundColor = "BlanchedAlmond";
            }

            echo "<span style='padding: 5px; font-size: xx-large;"
                ."font-weight: bold; color: $color; background-color: $backgroundColor'>"
                .$text
                ."</span>"
            ?>
        </div>
    </div>
</body>

</html>