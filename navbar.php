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
      <script src="script.js"></script>
</head>
<body>
<header >
    <section>
      <div id="navigation" class="container flex gap-10 justify-between mx-auto items-center">
        <div class="left-side flex  items-center">
          <img src="./logo.svg" alt="logo">
            <nav class=" gap-5 item-center ">
                <ul class=" hidden md:flex text-left border ro pr-10 flex  items-center gap-5">
                  <li class="hover:bg-gray-200 py-4 px-6"><a href="#">Home</a></li>
                  <li class="hover:bg-gray-200 py-4 px-6"><a href="#">About</a></li>
                  <li class="hover:bg-gray-200 py-4 px-6"><a href="#">Services</a></li>
                  <li class="hover:bg-gray-200 py-4 px-6"><a href="#">Blog</a></li>
                  <li class="hover:bg-gray-200 py-4 px-6"><a href="#">Contact</a></li>
                </ul>
            </nav>
            <button class="mobile-btn right-10 top-7 lg:static lg:hidden bg-blue-250 px-4 py-2 rounded" id="menu-btn">
              <svg class="bar" width="30" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 17H19M5 12H19M5 7H19" stroke="black" stroke-width="2.01562" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="bg-blue-200 hidden flex-col rounded mt-1 p-2 text-sm w-32 text-left" id="dropdown">
                <a class="hover:bg-gray-200 py-4 px-6" href="#">Home</a>
                <a class="hover:bg-gray-200 py-4 px-6" href="#">About</a>
                <a class="hover:bg-gray-200 py-4 px-6" href="#">Services</a>
                <a class="hover:bg-gray-200 py-4 px-6" href="#">Blog</a>
                <a class="hover:bg-gray-200 py-4 px-6" href="#">Contact</a>
              </div>
            </button>
          </div>
            <div class="right-side flex gap-10">
              <button>
                <img src="./search.svg" alt="search">
              </button>
              <button class="button-primary">Get Started</button>
            </div>
    </div>
  </section>
  <script>
    window.addEventListener('DOMContentLoaded', ()=> {
        const menuBtn = document.querySelector('#menu-btn')
        const dropdown = document.querySelector('#dropdown')
        menuBtn.addEventListener('click', () => {
            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
        })

    })
</script>
</body>
</html>