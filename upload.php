<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $fileName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        $message = "File is not an image.";
    }
    elseif ($_FILES["image"]["size"] > 5000000) {
        $message = "File is too large. Max 5MB.";
    }
    elseif (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif", "webp"])) {
        $message = "Only JPG, JPEG, PNG, GIF & WEBP files are allowed.";
    }
    else {
        $newFileName = uniqid() . "." . $imageFileType;
        $targetFile = $targetDir . $newFileName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $message = "Image uploaded successfully!";
        } else {
            $message = "Error uploading the image.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 50px auto; }
        form { border: 2px dashed #ccc; padding: 30px; text-align: center; border-radius: 10px; }
        input[type="file"] { margin: 15px 0; }
        input[type="submit"] { background: #4CAF50; color: white; padding: 10px 25px; border: none; border-radius: 5px; cursor: pointer; }
        input[type="submit"]:hover { background: #45a049; }
        .message { margin-top: 15px; padding: 10px; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
        img { max-width: 100%; margin-top: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <p>Select an image to upload:</p>
        <input type="file" name="image" accept="image/*" required>
        <br><br>
        <input type="submit" value="Upload">
    </form>

    <?php if ($message): ?>
        <div class="message <?= strpos($message, 'successfully') !== false ? 'success' : 'error' ?>">
            <?= htmlspecialchars($message) ?>
        </div>
        <?php if (isset($targetFile) && file_exists($targetFile)): ?>
            <img src="<?= htmlspecialchars($targetFile) ?>" alt="Uploaded Image">
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
