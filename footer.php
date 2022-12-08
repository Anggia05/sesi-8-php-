<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&family=Raleway:wght@500&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>
    <style type="text/tailwindcss">
    
        @layer utilities {
          header {
            @apply pt-5;
            background: linear-gradient(180deg, #FFFFFF 0%, #EAF4FF 46.08%, #FFFFFF 100%);
          }
          nav a {
            @apply hover:underline hover:text-primary font-nav;
          }
          .button-primary {
            @apply bg-primary text-white px-5 py-2 rounded-full;
          }
          .gradient {
          background: -webkit-linear-gradient(left, #e18700 0%, #ff32ad 50%, #0ec5d7 100%);
          color: transparent;
          background-clip: text;
        }
        ul li{
          overflow: hidden;
        }
        nav > ul > li {
          @apply w-full p-0;
        }
        .has-child {
          @apply overflow-hidden;
        }
        .has-child > span.caret {
          @apply invert-0 top-4;
        }
        .has-child.active .submenu {
          @apply visible opacity-100 max-h-[1000px];
        }
        nav .submenu {
          @apply visible opacity-100 relative w-full max-h-0;
        }
        nav.active {
          left: 0;
        }
      }
      </style>
      
</head>
<body>
<section class="bg-[#125960] text-white font-Plus Jakarta Sans">
      <div class= "mx-full bg-[#125960] text-white font-Plus Jakarta Sans grid grid-cols-5 gap-5 justify-between lg:max-w-[1700px] mx-auto">
        <div class=" ustify-center mx-auto px-3 py-2">
          <div class="flex items-center px-3 py-2">
            <img src="logo.svg" alt=""> <h3 class="flex items justify  px-3 py-2 font-bold">Mangcoding</h3>
          </div>
          <p class="justify-center px-3 py-2 w-[200px]">Mangcoding Team Will Help You In Branding Your Product  asdMangcoding Team Will Help You In Branding Your Product asdMangcoding Team Will Help.</p>
          <img src="sos.png" alt="">
        </div>
        <div class="ustify-center mx-auto px-5 py-3">
              <h4 class="font-bold py-4">Mangcoding</h4>
              <p class="">Home</p>
              <p>About</p>
              <p>Services</p>
              <p>Blog</p>
              <p>Work</p>
              <p>Resource</p>
              <p>Contact </p>
        </div>
        <div class="ustify-center mx-auto px-3 py-5">
          <h4 class="font-bold">Service</h4>
          <p>Custom WordPress Theme Development</p>
          <p>Custom Plugin WordPress</p> 
          <p>Custom Shopify Theme Development</p> 
          <p>Custom App for Shopify</p>   
          <p>Web Application</p> 
        </div>
        <div class="ustify-center mx-auto px-3 py-5">
          <h4 class="font-bold">Trusted partner</h4>
          <img class="w-[100px]" src="oraly.png" alt="">
          <img class="w-[100px]" src="kiwa.png" alt="">
        </div>
        <div class=" mx-auto px-3 py-5">
          <h4 class="font-bold">Service</h4>
            <ul  class="text-clip overflow-hidden">
              <div class="flex py-2 ">
                <img class="w-20px]"  src="Vector (1).png" alt="">
                <li><a href="#"><i class="px-2"></i>hello@mangcoding.com</a></li>
              </div>
              <div class="flex py-2">
                <img class="w-[20px]" src="Vector (2).png" alt="">
                <li><a href="#"><i class="px-2"></i>0266-6532078 WA:0857-5940-2332</a></li>
              </div>
              <div class="flex py-2">
                <img class="w-[20px]"  src="Vector (3).png" alt="">
                <li><a href="#"><i class="px-2"></i>PT Anugrah Kreasi Digital. karang <br>     tengah, Cibadak - Sukabumi</a></li>
              </div>
            </ul>
        </div>
      </div>
        <div class="text-center font-bold text-m py-2 font-Plus Jakarta Sans lg:max-w-[2000px]">
           <small> Copyright &copy; Anggia Putri Paling cantik, All Rights Reserved.</small>
      </div>      
   </section>
</body>
</html>