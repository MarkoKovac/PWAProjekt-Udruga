<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateAnimals.php");

session_start();

$table = 'animals';
$animals = selectAll($table);

$errors = array();

$id = "";
$title = "";
$body = "";
$vrsta = "";
$spol = "";
$velicina = "";
$published = "";

if (isset($_GET['id'])) {
    $animal = selectOne($table, ['id' => $_GET['id']]);
    $id = $animal['id'];
    $title = $animal['title'];
    $body = $animal['body'];
    $vrsta = $animal['vrsta'];
    $spol = $animal['spol'];
    $velicina = $animal['velicina'];
    $published = $animal['published'];
}

if(isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Animal published successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/animals/index.php");
    exit();
}

if (isset($_GET['delete_id'])) {
    $count = delete($table,$_GET['delete_id']);
    $_SESSION['message'] = "Animal deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/animals/index.php");
    exit();
}

if (isset($_POST['add-animal'])){
    $errors = validateAnimals($_POST);

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
        header("location: " . BASE_URL . "/admin/animals/index");
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $vrsta = $_POST['vrsta'];
        $spol = $_POST['spol'];
        $velicina = $_POST['velicina'];
        $published = isset($_POST['published']) ? 1 : 0;
    }   
}

if (isset($_POST['update-animal'])){
    $errors = validateAnimals($_POST);
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
        array_push($errors,"Animal image required");
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-animal'], $_POST['id']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $animal_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Animal updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/animals/index");
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $vrsta = $_POST['vrsta'];
        $spol = $_POST['spol'];
        $velicina = $_POST['velicina'];
        $published = isset($_POST['published']) ? 1 : 0;
    } 
}
