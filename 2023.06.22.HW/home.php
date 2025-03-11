<?
$folderPath = "Images";
$files = [];

if (file_exists($folderPath)) {
    $files = array_diff(scandir($folderPath), ['.', '..']);
}
?>

<div style="margin-top: 10px;">
    <?php if (empty($files)): ?>
        <p>Add your first image!</p>
    <?php else: ?>
        <?php foreach ($files as $file): ?>
            <div style="margin-bottom: 10px;">
                <img src="<?= $folderPath . '/' . $file ?>" alt="Uploaded Image" style="max-width: 100%; height: auto;">
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
