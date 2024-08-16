<?
$_SESSION["History"][] = $_SERVER['REQUEST_URI'];

?>

<form method="post" action="form3age.server.php">
    <div>
        <label for="Age_input">Age:</label>
        <input id="Age" name="Age" type="text" required />
    </div>
    <div style="margin-top: 15px;">
        <input type="submit" name="Go" value="Send" />
    </div>
</form>