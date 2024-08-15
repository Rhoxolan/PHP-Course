<?
$_SESSION["History"][] = $_SERVER['PHP_SELF'] . "/?" . $_SERVER['QUERY_STRING'];

?>

<form method="post" action="form1name.server.php">
    <div>
        <label for="Name_input">Name:</label>
        <input id="Name_input" name="Name" type="text" required />
    </div>
    <div style="margin-top: 15px;">
        <input type="submit" name="Go" value="Send" />
    </div>
</form>