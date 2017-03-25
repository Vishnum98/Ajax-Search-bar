<?php

    // configuration
    require("../controllers/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("../public_html/postad.html", ["title" => "Sell item", "category" => $category]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        // validate submission
        if (empty($_POST["title"]))
        {
            apologize("You must give title of your item.");
        }
        else if (empty($_POST["desc"]))
        {
            apologize("You must provide description");
        }
        else if (empty($_POST["contact"]))
        {
            apologize("You must give your contact information");
        }
        else if (empty($_POST["price"]))
        {
            apologize("You must give price of your item.");
        }
        else if (empty($_POST["category"]))
        {
            apologize("You must select a category.");
        }
        print_r($_POST);
        
        
       /* //getting file name
        $target_dir = "../public_html/uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        
        //file extension
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false)
        {
            //echo "File is an image - " . $check["mime"] . ".</br>";
            $uploadOk = 1;
        } 
        else 
        {
            apologize("File is not an image.");
            $uploadOk = 0;
        }
        
        //checking size of uploaded file
        if ($_FILES["image"]["size"] > 5000000)
        {
            apologize("Your file is too large(>5MB).");
            $uploadOk = 0;
        }
        
        //checking if there was an error
        if ($uploadOk == 0) 
            apologize("Your file was not uploaded.");
        else
        {
            if (!move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file))
                apologize("There was an error uploading your file.");
        }
        
        
        
        $category_id = $_POST["category"];
        
        $query = sprintf("SELECT college FROM users WHERE id = '%s'",$_SESSION["id"]);
        $result = mysqli_query($link, $query);
        $college = mysqli_fetch_array($result)["college"];
        
        //insering information
        $query = sprintf("INSERT INTO items (path,title,price,college,category,description,contact,choice,seller_id) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s')", $target_file, $_POST["title"], $_POST["price"], $college, $selected_category ,$_POST["description"], $_POST["contact"], $choice, $_SESSION["id"]);
        $result = mysqli_query($conn, $query);
        
        if($result === false)
            apologize("Can not insert");
        
        redirect("/");*/
    }

?>
