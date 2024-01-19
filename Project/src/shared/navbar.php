
<!doctype html>
<html lang="en">
  <body>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      *{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  box-sizing: border-box;
}
.container-fluid img{
  width: 50px;
  height: 50px;
  border-radius: 100%;
}
.form-control1,.btn{
  border-radius: 30px;
}
.btn{
  border: 1px solid #1a282d;
  color: #ff4500;
  transform: translateX(-75px);
  border-radius: 0 30px 30px 0 ;
}
.btn:hover{
  background: #ff4500;
  color: white;
}
.navbar{
  margin: 0;
  padding: 0;
}
.nav1{
  padding: 10px;
  background: #0b1416;
}
.form-control1{
  background: #1a282d;
  border: 0px solid;
  width: 800px; 
  padding: 10px 20px;
  color: white;
}
.form-control1:focus{
  outline: none;
}
.create-btn:hover{
  background: #1a282d;
}
.navbar-brand{
  color: white;
  opacity: 60%;
}
.create-btn{
  border: none;
  background: #0b1416;
  color: white;
  /* padding: 10px 20px; */
  border-radius: 30px; 
  width: 120px;
  height: 40px;
}
.container img{
  color: white;
}
.user-btn{
  border: none;
  background: #0b1416;
  color: white;
  border-radius: 30px;
  outline: none;
  width: 120px;
  height: 40px;
}
.user-btn:hover{
  background: #1a282d;
}
.user-btn:focus{
  outline: none;
  text-decoration: none;
}
.right-nav{
  display: flex;
  flex-direction: row;
}
.dropdown-item{
  padding: 15px 15px;
  margin-right: 15px;
}
.dropdown-menu,.dropdown-item{
  background: #0b1416;
  border-radius: 20px;
  font-size: 14px;
  color: white;
}
.dropdown-item:hover{
  background: #1a282d;
  color: white;
}

    </style>
    <div class="nav1">
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-logo"><img src="brain.gif" alt=""></a>
          <form class="d-flex" role="search">
            <input class="form-control1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div class="right-nav">
            <nav class="navbar">
              <div class="container">
                <a class="navbar-brand" href="#">
                  <button class="create-btn">+ Create</button>
                </a>
              </div>
          </nav>
          <nav class="navbar">
              <div class="container">
                <div class="dropdown">
                  <button class="user-btn"
                  data-bs-toggle="dropdown" aria-expanded="false">
                    Hello, <?php 
                        session_start(); 
                        if(isset($_SESSION["logged-in"])){
                            $user = $_SESSION['user-data']["username"];
                            echo "$user";
                        }else{
                            echo "Guest";
                        }
                    ?>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg> My Profile</a></li>
                    <li>
                    <?php
                        if(isset($_POST["logout-btn"])){
                            session_unset();
                            // unset($_SESSION["logged-in"]);
                            header("Refresh:0");
                        }
                    ?>
                <?php
                 if(isset($_SESSION["logged-in"])){
                  echo '<form action="" method="post" class="dropdown-item"><button type="submit" name="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="m2 12 5 4v-3h9v-2H7V8z"></path><path d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051 2.051 3.08 2.051 4.95-.729 3.628-2.051 4.95-3.08 2.051-4.95 2.051-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z"></path></svg> Logout</button></form></li>';
                } ?>
                  </ul>
                </div>
              </div>
          </nav>
          </div>
        </div>
      </nav>
    </div>
  </body>
</html>