<?
if (isset($_SESSION['message'])) {
    echo "<script>alert('{$_SESSION['message']}');</script>";
    unset($_SESSION['message']);
}
?>

<form method="post" action="upload.server.php" enctype="multipart/form-data">
    <div>
        <label for="Image_input">Choose an image:</label>
    </div>
    <div style="margin-top: 5px;">
        <input id="Image_input" name="Image" type="file" accept="image/*" required />
    </div>
    <div style="margin-top: 15px;">
        <input type="submit" name="Go" value="Submit" />
    </div>
</form>