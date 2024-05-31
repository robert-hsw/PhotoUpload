<?php
echo "
<style>
body {
    background-color: #a2b9c9; /* Change to your desired color */
}
.upload-success {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 3em; /* Adjust as needed */
    text-align: center;
    width: 100%;
    z-index: 2; /* Ensure the text is above the fireworks */
}
#fireworks {
    position: absolute;
    z-index: 1; /* Ensure the fireworks are below the text */
}
.upload-error, .error-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2; /* Ensure the text and image are above the fireworks */
}
</style>
";

$target_dir = "pictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$allowedTypes = ['jpg', 'png', 'jpeg', 'gif', 'avif', 'webp']; // Define allowed file types



// Try to upload file if it's OK
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<div class='upload-success'>Picture Uploaded!</div>";
        echo "<script src='fireworks.js'></script>"; 
    } else {
        echo "<div class='upload-error'>Sorry, there was an error uploading your file.</div>";
        echo "<img src='media/sad.png' class='error-image' alt='Error Image'>";
    }
}

// JavaScript for redirecting after 3 seconds
echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 4000);</script>";
?>
