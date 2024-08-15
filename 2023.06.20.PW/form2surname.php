<?
$_SESSION["History"][] = $_SERVER['PHP_SELF'] . "/?" . $_SERVER['QUERY_STRING'];

?>

<form method="post" action="form2surname.server.php">
    <div>
        <label for="Surname_input">Surname:</label>
        <input id="Surname_input" name="Surname" type="text" required />
    </div>
    <div style="margin-top: 15px;">
        <input type="submit" name="Go" value="Send" />
    </div>
</form>