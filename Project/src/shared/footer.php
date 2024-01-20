<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    <footer class="text-gray-500 bg-gray-950 px-5 py-2 left-0 bottom-0 mt-[300px] text-center">
        <div class="footer-section mb-2">
        <h3 class="underline gap-2">Contact Us</h3>
        <p>Email: info@example.com</p>
        <p>Phone: +91 9481169231</p>
        </div> 
        <p>&copy; 2024 BuzzQuill. All rights reserved | Privacy Policy | Terms of Service</p>   
        
    </footer>
</body>
</html>