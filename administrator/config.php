<?php
function ConnectDB()
{
    $con = mysqli_connect("localhost", "root", "", "digital_currency");
    return $con;
}

# select admin
function SelectAdmin()
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from login");
    return $query;
}

function AdminIsSet()
{
    session_start();
    if (!isset($_SESSION['admin'])) {
        header("location:http://localhost/PHP/digital_currency/administrator/login.php");
    }
}

#select courses
function SelectCourses()
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from courses");
    return $query;
}

function InsertCourses($title, $description, $imageName)
{
    $con = ConnectDB();
    mysqli_query($con, "insert into courses(title, description, image) VALUES ('$title', '$description', '$imageName')");
}

# insert admin
function InsertAdmin($userName, $securityPassword, $access)
{
    $con = ConnectDB();
    $query = mysqli_query($con, "insert into login (username, password, access) values ('$userName', '$securityPassword', '$access')");
    return $query;
}

# admin is set

function UploadFile($image, $folder)
{
    $imageName = time() . $image['name'];
    $directory = "../images/" . $folder . "/" . $imageName;
    move_uploaded_file($image['tmp_name'], $directory);
    return $imageName;
}

function SelectCoursesById($id)
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from courses where id = $id");
    $item = mysqli_fetch_assoc($query);
    return $item;
}

function DeleteCourses($id)
{
    $con = ConnectDB();
    mysqli_query($con, "delete from courses where id = $id");
}

function UploadConditionImage($image, $item, $folder)
{
    if ($image['name'] == null) {
        echo "empty";
        return $imageName = $item['image'];
    } else {
        echo "not empty";
        unlink("../images/" . $folder . "/" . $item['image']);
        return $imageName = UploadFile($image, $folder);
    }
}

function UpdateCourses($title, $description, $imageName, $id)
{
    $con = ConnectDB();
    mysqli_query($con, "update courses set title= '$title', description= '$description', image= '$imageName' where id= '$id'");
}

function SelectArticles()
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from articles");
    return $query;
}

function InsertArticles($title, $description, $imageName)
{
    $con = ConnectDB();
    mysqli_query($con, "insert into articles(title, description, image) VALUES ('$title', '$description', '$imageName')");
}

function SelectArticlesById($id)
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from articles where id = $id");
    $item = mysqli_fetch_assoc($query);
    return $item;
}

function DeleteArticles($id)
{
    $con = ConnectDB();
    mysqli_query($con, "delete from articles where id = $id");
}

function UpdateArticles($title, $description, $imageName, $id)
{
    $con = ConnectDB();
    mysqli_query($con, "update articles set title= '$title', description= '$description', image= '$imageName' where id= '$id'");
}

################################## start contact ##################################
function InsertContacts($name, $email, $phone, $message)
{
    $con = ConnectDB();
    mysqli_query($con, "insert into contacts(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')");
}

function SelectContacts()
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from contacts");
    return $query;
}

function DeleteContacts($id)
{
    $con = ConnectDB();
    mysqli_query($con, "delete from contacts where  id = $id");
}

################################## end contact ##################################
function InsertUsers($fullName, $phoneNumber, $email, $userName, $securityPassword)
{
    $con = ConnectDB();
    mysqli_query($con, "insert into users(fullName, phoneNumber, email, username, password) VALUES ('$fullName', '$phoneNumber', '$email', '$userName', '$securityPassword')");
}

function SelectUsers()
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from users");
    return $query;
}

function InsertUsers_course($username, $course_id)
{
    $con = ConnectDB();
    mysqli_query($con, "insert into users_course(username, course_id) VALUES ('$username', '$course_id')");
}

function SelectUsers_courseByUsername($username)
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from users_course where username = '$username'");
    return $query;
}

function SelectUsers_courseByCourse_id($id)
{
    $con = ConnectDB();
    $query = mysqli_query($con, "select * from users_course where course_id = $id");
    return $query;
}






















