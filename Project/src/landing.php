<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logo-removebg.png"><link>
    <title>BuzzQuill</title>
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
</head>
<body class="bg-primary">
    <div>
        <div class="grid grid-cols-10">
            <div class=" col-span-5 flex justify-center items-center flex-col">
                <img src="./images/logo-removebg.png" alt="" width="500" class="mt-20">
            </div>

            <div class=" col-span-5 text-white flex justify-center flex-col mt-6">
                <div class="border-b-2 border-secondary pb-5">
                    <h1 class="text-4xl mr-64 p-2 font-bold">Empowering Minds, Connecting Futures</h1>
                    <h3 class="ml-2 mt-2 text-lg ">Join today</h3>
                    <a href="./index.php" class="text-lg rounded-full ml-2 mt-5 text-[#ff4500]">View our community</a>
                </div>

                <div class="ml-2 mt-8">
                    <a href="./register.php"><button class="text-md bg-[#ff4500] rounded-full px-5 py-3">Create account</button></a>

                    <p class="mt-5">Already have an account? <a href="./login.php" class="text-[#ff4500]">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>