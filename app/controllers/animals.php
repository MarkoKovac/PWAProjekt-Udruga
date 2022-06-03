<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePosts.php");
session_start();

$table = 'animals';
$errors = array();

$animals = selectAll($table);

$title = "";
$body = "";
$published = "";

if (isset($_POST['add-animal'])){
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time().''.$_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'],$destination);
        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors,"Failed to upload image");
        }
    
    } else {
        array_push($errors,"Post image required");
    }
    
    if (count($errors) == 0) {
        unset($_POST['add-animal']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
    
        $animal_id = create($table, $_POST);
        $_SESSION['message'] = "Animal created successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/animals/index.php");
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $published = isset($_POST['published']) ? 1 : 0;
    }   

}