<?php

function m_get_data() {
    $query = "SELECT * FROM student";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}

function m_add_data($data) {
    include "connection.php";
    $fullname = $_POST['name'];
    $class = $_POST['class'];
    $mark = $_POST['mark'];
    $sex = $_POST['sex'];
    $filename = $_FILES['profile']['name'];
    $fileLocation = $_FILES['profile']['tmp_name'];
    move_uploaded_file($fileLocation, "Views/img/".$filename);

    $query = "INSERT INTO student(name,class,mark,sex,profile)
              VALUES('$fullname', '$class', '$mark', '$sex', '$filename')";
    $result = mysqli_query($connection, $query);

    return $result;


}
