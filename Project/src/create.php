<?php
    session_start();
    if(!isset($_SESSION['logged-in'])){
        header('location: login.php');
    }
    $connection = mysqli_connect("34.93.160.208","root","scsphp","SCS_php");
    if(isset($_POST['sub-btn'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $aid = $_SESSION['user-data']['id'];
        $res = mysqli_query($connection,"insert into Post(author_id,title,description) VALUES ('$aid','$title','$description')");
        if(!$res){
            header("Refresh: 0");
        }else{
            header("location: index.php");
        };
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        *{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
body{
    background: #0b1416;
}
.container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.create-post{
    margin-left: 20px;
    color: white;
    border-bottom: 2px solid #1a282d;
    padding-bottom: 15px;
}
.require {
    color: #666;
}
label small {
    color: #999;
    font-weight: normal;
}
.tag{
    font-size: larger;
    padding-bottom: 10px;
}
.form-control1{
    padding: 5px 10px;
    background: #1a282d;
    height: 30px;
    width: 600px;
    border-radius: 10px;
    color: white;
    font-size: large;
    border: none;
}
.form-control{
    background: #1a282d;
    height: 200px;
    width: 600px;
    color: white;
    padding: 5px 10px;
    font-size: medium;
    border: none;
}

.form-group{
    display: flex;
    flex-direction: column;
    color: white;
    padding: 20px;
}
.inputbox{
    border-radius: 10px;
}
.btn-primary{
    margin-top: none;
    background: #ff4500;
    color: white;
    font-size: medium;

}
.btn-primary:hover{
    opacity: 70%;
}
.post-btn{
    font-size: large;
    border-radius: 20px;
    width: 120px;
    height: 40px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="create-post ">Create post</h1>
                <form action="" method="POST">
                    <div class="form-group">
                        <label class="tag" for="title">Title : </label>
                        <input type="text" class="form-control1" placeholder="Enter Title" name="title" />
                    </div>
                    <div class="form-group">
                        <label class="tag" for="title">Description : </label>
                        <textarea rows="5" class="form-control inputbox" placeholder="Enter Text" name="description" ></textarea>
                    </div>
                    <div class="form-group">
                        <div class="post-btn0">
                            <button type="submit" name="sub-btn" class="post-btn btn-primary">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>