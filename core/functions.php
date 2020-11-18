<?php

function old($inputName){
    if (isset($_POST[$inputName])){
        return $_POST[$inputName];
    }else{
        return "";
    }
}

function linkTo($l){
    echo "<script>location.href='$l'</script>";
}

function textFilter($text){
    $text = trim($text);
    $text = htmlentities($text,ENT_QUOTES);
    $text = stripslashes($text);
    return $text;
}

function setError($inputName,$message){
    $_SESSION['error'][$inputName] = $message;
}

function getError($inputName){
    if (isset($_SESSION['error'][$inputName])){
        return $_SESSION['error'][$inputName];
    }else{
        return "";
    }
}

function clearError(){
    return $_SESSION['error'] = [];
}

function delete($id){
    $sql = "DELETE FROM contacts WHERE id=$id";
    return mysqli_query(con(),$sql);
}

function contact($id){
    $sql = "SELECT * FROM contacts WHERE id = $id";
    $query = mysqli_query(con(),$sql);
    return $row = mysqli_fetch_assoc($query);
}

function contacts(){
    $sql = "SELECT * FROM contacts";
    $query = mysqli_query(con(),$sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)){
        array_push($rows,$row);
    }
    return $rows;
}

function saveContact(){
    $errorStatus = 0;
    $name = "";
    $phone ="";
    $photo = "";

    if (empty($_POST['name'])){
        setError("name","Name is required");
        $errorStatus  = 1;
    }else{
        if (strlen($_POST['name']) < 5){
            setError("name","Name is too short");
            $errorStatus  = 1;
        }else{
            if (strlen($_POST['name']) > 20){
                setError("name","Name is too long");
                $errorStatus  = 1;
            }else{
                if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
                    setError("name","Name format is wrong");
                    $errorStatus  = 1;
                }else{
                    $name = textFilter($_POST['name']);
                }
            }
        }
    }

    if (empty($_POST['phone'])){
        setError("phone","Phone is required");
        $errorStatus  = 1;
    }else{
        if (!preg_match("/^[0-9 ]*$/",$_POST['phone'])) {
            setError("phone","Phone format is wrong");
            $errorStatus  = 1;
        }else{
            if (strlen($_POST['phone']) > 13){
                setError("phone","Phone Number is too long");
                $errorStatus  = 1;
            }else{
               if (strlen($_POST['phone']) < 7){
                   setError("phone","Phone Number is too Short");
                   $errorStatus  = 1;
               }else{
                   $phone = $_POST['phone'];
               }
            }
        }
    }



    $supportFileType = ['image/jpeg','image/png'];
    if (empty($_FILES['photo']['name'])) {
        setError('photo','Photo is required');
        $errorStatus = 1;
    }else{
        $tampFile = $_FILES['photo']['tmp_name'];
        $fileName = $_FILES['photo']['name'];
        $fileSize = $_FILES['photo']['size'];
        if (!in_array($_FILES['photo']['type'], $supportFileType)) {
            setError('photo','File format not support');
            $errorStatus = 1;
        }else{
            if ($fileSize > 3000000){
                setError('photo','Photo size is too large to upload');
                $errorStatus = 1;
            }else{
                $saveFile = "store/";
                $newFileName = $saveFile.uniqid()."_".$fileName;
                move_uploaded_file($tampFile,$newFileName);
                $photo = textFilter($newFileName);
            }
        }
    }


    if (!$errorStatus){
        $sql = "INSERT INTO contacts (name,phone,photo) VALUES ('$name','$phone','$photo')";
        return mysqli_query(con(),$sql);
    }
}


