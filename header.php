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
<section class="hero lg:max-w-[700px] mx-auto">
      <h1 class="font-base text-heading-1 font-bold text-center mt-10 leading-tight">It's Fun To Build a Website With <span class="gradient">The Mangcoding Team</span> </h1>
      <p class="text-center text-[#636363] my-3">The Mangcoding team will help build a website for your company with quality and guaranteed services, with custom templates you can create a website as you like.</p>
      <div class="mb-5 action mx-auto flex justify-center items-center gap-5">
        <a href="#" class="button-primary">Get Started</a>
                <a href="#" class="underline flex items-center gap-2">
                    Explore Our Blog
                    <img src="./arrow-right.svg" alt="">
                </a>
            </div>
            <img src="Design.png" alt="">
        </section>
    </header>
        
    <section class=" hero lg:max-w-[1700px] mx-auto">
        <div class="hero lg:max-w-[1000px] mx-auto pt-10 ">
            <div class="font-base mx-auto items-stretch pb-14">
                <h2 class=" text-center text-[#636363] my-5 ">Brands that trust us</h2>
                <div class="ml-20 mt-10 grid grid-cols-6 gap-6">
                  <div class="scroll-ml-6 snap-start">
                    <img src="blech.png" alt="" />
                  </div>
                  <div class="scroll-ml-6 snap-start"><img src="ceria.png" alt="" /></div>
                  <div class="scroll-ml-6 snap-start"><img src="jfx.png" alt="" /></div>
                  <div class="scroll-ml-6 snap-start"><img src="pizza.png" alt="" /></div>
                  <div class="scroll-ml-6 snap-start"><img src="rata.png" alt="" /></div>
                  <div class="scroll-ml-6 snap-start"><img src="plant.png" alt="" /></div>
                </div>
              </div>
        </div>
    </section>
</body>
</html>