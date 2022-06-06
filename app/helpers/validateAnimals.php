<?php 
    function validateAnimals($animals){
        $errors = array();
    
        if(empty($animals['title'])) {
            array_push($errors, 'Title is required');
        }
        if(empty($animals['body'])) {
            array_push($errors, 'Body is required');
        }
        if(empty($animals['vrsta'])) {
            array_push($errors, 'Vrsta is required');
        }
        if(empty($animals['spol'])) {
            array_push($errors, 'Spol is required');
        }
        if(empty($animals['velicina'])) {
            array_push($errors, 'Velicina is required');
        }
        
        $existingAnimals = selectOne('animals', ['title' => $animals['title']]);
        if ($existingAnimals) {
            if (isset($animals['update-animal']) && $existingAnimals['id'] != $animals['id']){
                array_push($errors, 'Post with that title already exists');
            }

            if (isset($animals['add-animal'])) {
                array_push($errors, 'Post with that title already exists');
            }
        }
        return $errors;
    }
?>