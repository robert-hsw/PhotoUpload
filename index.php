<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url("media/angel.jpg");
            background-repeat: no-repeat;
            background-size: min(100%, 900px); 
            background-position: center top; 
            background-color: black; 
            margin: 0; 
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 30px; 
        }

   
        #fileToUpload {
            display: none;
        }


        label[for="fileToUpload"] {
            display: inline-block;
            width: 230px;
            height: 227px;
            background-image: url("media/button.png");
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: contain;
            cursor: pointer; 
            padding: 20px;
        }



        input[type="submit"] {
    background-color: transparent;       
    background-image: url("media/submit.jpg");
    background-repeat: no-repeat;
    background-size: contain;
    border: none;
    width: 410px;
    height: 111px;
    cursor: pointer;
    appearance: none;
    margin: 0;
    -webkit-appearance: none; 
    
}

        
    </style>
</head>
<body>

    <div class="container">
        <form action="uploader.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload" class="custom-file-upload"></label>
        <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;">
        <br><input type="submit" value="" name="submit">
        </form>
    </div>
</body>
</html>