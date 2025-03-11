<?php
session_start();

if (isset($_FILES["Image"])) {
    save_uploaded_file($_FILES["Image"]);
}

header("Location: /?page=Upload");

function save_uploaded_file($file)
{
    $folderPath = "Images";
    
    if (!file_exists($folderPath)) {
        mkdir($folderPath);
    }
    
    $filePath = $folderPath . '/' . basename($file["name"]);
    
    if (move_uploaded_file($file["tmp_name"], $filePath)) {
        $_SESSION["message"] = "File uploaded successfully!";
    } else {
        $_SESSION["message"] = "Failed to upload file.";
    }
}