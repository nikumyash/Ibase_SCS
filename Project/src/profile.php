<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>BuzzQuill</title>
    <link rel="icon" href="./images/logo-removebg.png"><link>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
    </style>
     <script>
    tailwind.config = {
        theme: {
            extend: {
                colors:{
                    "primary": "#0B1416",
                    "secondary": "#1A282D"
                }
            },
        },
    }
  </script>

    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <body class="bg-primary h-full">
        <div class="mt-8 grid grid-cols-10 text-[#cccccc]">

        <!-- side bar -->
            <div class="col-span-2 w-10/12 mx-16 my-5">
                <div class="font-semibold flex h-full justify-center border-r-2 border-secondary py-2 px-4 ">
                    <ul class="w-full">
                        <li class="flex px-2 py-2 mt-2 rounded-2xl hover:bg-secondary cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6 ml-2">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                            <a href="/index.php" class="ml-3">Home</a>
                        </li>
    
                        <li class="flex px-2 py-2 mt-2 rounded-2xl hover:bg-secondary cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6 ml-2">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                              </svg>                          
                            <a href="#" class="ml-3">About</a>
                        </li>
                        <?php
                        if(isset($_POST["logout-btn"]) && isset($_SESSION['logged-in'])){
                            session_unset();
                            header('location: login.php');
                            // echo '<script>location.reload()</script>';
                        }
                    ?>
                        <form action="" method="post" class="flex px-2 py-2 mt-2 rounded-2xl hover:bg-secondary cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6 ml-2">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                      </svg>                          
                        <button type="submit" name="logout-btn" class="ml-3">Logout</button>
                    </form>
                        <div class="border-b-2 border-secondary mt-4"></div>
                    </ul>
                </div>
            </div>
            
            <div class="col-span-6 mx-12 my-5">
                
                <div class="border-b-2 border-secondary pb-4">
                    <img src="./images/profilepic.webp" alt="" width="60" height="60" class="float-start rounded-full">
                    <div class="ml-20">
                        <h1 class="text-4xl font-bold"><?php $n = $_SESSION["user-data"]["username"];
                        echo "$n" ?></h1>
                        <p class="text-sm text-gray-600 font-semibold">joined on : <?php $ja = $_SESSION["user-data"]["joinedAt"];
                        echo "$ja" ?></p>
                    </div>
                </div>
                <div class="mt-12 border-b-2 border-secondary pb-8">
                    <span class="text-xl bg-secondary px-4 py-2 rounded-full">Posts</span>
                </div>

                <!-- User posts -->
                <div>
                    <?php 
                    require('config/dbconnect.php');
                    $res = mysqli_query($connection,"SELECT * FROM Post as P LEFT JOIN User as B on B.id=P.author_id where P.author_id=".$_SESSION['user-data']['id']." order by P.createdAt DESC;");
                    while($row = mysqli_fetch_array($res)){
                        echo('<div class="bg-[#0B1416] text-lg border-y-2 hover:border-none border-secondary hover:bg-secondary ease-in-out duration-200 hover:rounded-3xl overflow-hidden p-3 mt-5">

                        <img src="./images/profilepic.webp" alt="" class="w-12 rounded-full float-left m-3"/>
                        <div class="flex flex-col py-2">
                            <h3 class="font-bold mb-2 cursor-pointer" id="user">'.$row['name'].'</h3>
                            <h4 class=" font-semibold text-xl">'.$row['title'].'</h4>
                            <p id="postText">
                            '.$row['description'].'
                            </p>
                        </div>
                    </div>');
                    }
                ?>
                </div>

            </div>
            
        </div>
        <?php require('shared/footer.php') ?>
</body>
</html>