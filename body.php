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

    <section>
      <div class=" ml-10 mt-20 flex flex-wrap item-center justify-between">
        <div class=" mx-auto ">
          <h2 class="font-bold text-[35px]">Services</h2>
          <p class=" text-[15px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab sequi minima accusamus eligendi perferendis veritatis.</p>
        </div>
        <div>
          <button class="button-primary mr-20 float-right w-40 h-14">Build Design</button>
        </div>
      </div>
    </section>
    <section>
        <div class=" ml-10 mt-20 flex flex-wrap justify-evenly items-center">
              <div class="flex justify-center mx-auto grid grid-cols-3 text-center place-content-center  ">
                <div class="frame items-center justify-center px-3 py-10 ">
                  <div class="flex justify-center">
                    <img src="shopify.png" alt="" />
                  </div>
                  <h1 class="font-extrabold text-lg py-4 text-sm ">Shopify Theme Development</h1>
                  <p class="py-4 text-sm ">Start from 700 USD for project base or 35 USD per hour</p>
                </div>
                <div class=" frame items-center justify-center px-3 py-10">
                  <div class="flex justify-center">
                    <img src="php.png" alt="" />
                  </div>
                  <h1 class="font-extrabold text-lg py-4 text-sm ">Web Application Development</h1>
                  <p class="py-4 text-sm">Start from 1000 USD for project base or 35 USD per hour</p>
                </div>
                <div class="frame items-center justify-center px-3 py-10">
                  <div class="flex justify-center">
                    <img src="assit.png" alt="" />
                  </div>
                  <h1 class="font-extrabold text-lg py-4 text-sm ">Assistans Services</h1>
                  <p class="py-4 text-sm ">Start from 33 USD for project base or 35 USD per hour</p>
                </div>      
              </div>

              <div class=" flex mx-auto grid grid-cols-3 text-center items-center justify-center  ">
                <div class="frame items-center justify-center px-3 py-10">
                  <div class="flex justify-center">
                    <img src="word.png" alt="" />
                  </div>
                  <h1 class="font-extrabold text-lg py-4 text-sm ">WordPress Theme Development</h1>
                  <p class="py-4 text-sm ">Start from 600 USD for project base or 35 USD per hour</p>
                </div>
                <div class="frame items-center justify-center px-3 py-10  ">
                  <div class="flex justify-center">
                    <img src="www.png" alt="" />
                  </div>
                  <h1 class="font-extrabold text-lg py-4 text-sm ">Custom App/Plugins Development</h1>
                  <p class="py-4 text-sm ">Start from 300 USD for project base or 35 USD per hour</p>
                </div>
                <div class="frame items-center justify-center px-3 py-10">
                  <h1 class="font-bold text-slate-600 font-extrabold text-lg py-4 text-sm ">More Services:</h1>
                  <p class="font-bold">Technical Assistans</p>
                  <p class="font-bold">Support Assistans</p>
                  <p class="font-bold">VIP Assistans</p>
                  <p class="font-bold">Social Media Admin</p> 
                </div>  
              </div>
        </div>
    </section>

   
    <section  >
        <div class=" text-center container mx-auto my-20 py-20 flex-wrap justify-evenly">
          <h2 class=" py-10 font-bold text-[30px]">WHAT WE DO</h2>
          <P>Lörem ipsum patev antifili astrokålonat. Vanat aheten. Ekofiering makrora, på trekavis. Makrona tregät plang. Bekässade kast, eftersom sore. </P>
        </div>
    </section>
    <section>
      <div class=" text-center container flex mx-auto my-20 flex-wrap justify-evenly"> 
            <div class="grid grid-cols-4 gap-4 justify-between mx-auto text-center container mx-auto">
            <div class="mx-auto frame items-center justify-center px-3 py-2">
                <div class=" flex justify-center">
                  <img src="1 (1).png" alt="">
                </div>
                <h2 class="text-center font-bold text-m py-2">Design</h2>
                <p class="text-sm ">Create Wireframe Display Designs And Initial UI Designs For Websites</p>
              </div>
              <div class="mx-auto frame items-center justify-center px-3 py-2">
                <div class="flex justify-center">
                  <img src="1 (2).png" alt="">
                </div>
                <h2 class="text-center font-bold text-m py-2">Front End</h2>
                <p class="text-sm ">Create Wireframe Display Designs And Initial UI Designs For Websites</p>
              </div>
              <div class="mx-auto] frame items-center justify-center px-3 py-2">
                <div class="flex justify-center">
                  <img src="1 (3).png" alt="">
                </div>
                <h2 class="text-center font-bold text-m py-2">Back End</h2>
                <p class="text-sm ">Create Wireframe Display Designs And Initial UI Designs For Websites</p>
              </div>
              <div class="mx-auto frame items-center justify-center px-3 py-2">
                <div class="flex justify-center">
                  <img src="1 (4).png" alt="">
                </div>
                <h2 class="text-center font-bold text-m py-2">Check Test</h2>
                <p class="text-sm ">Create Wireframe Display Designs And Initial UI Designs For Websites</p>
              </div>
        </div>
    </section>

    <section class="pt-10 container mx-auto w-[1700px]">
        <div class="py-10 flex flex-wrap gap-2 justify-between mx-auto border-2 border-black rounded-[20px]">
          <div class="py-16 px-10 justify-between pt-10">
            <h2 class="font-bold text-[30px]">Retainer Orely Studi</h2>
            <p class="w-[500px]">Retainer Orely Studio is a website from the Orely company that we developed into Code.</p>
            <div class="mb-5 action mx-auto flex justify-center items-center gap-5">
              <a href="#" class="button-primary">Read more</a>
              <a href="#" class="underline flex items-center gap-2">
                  Link Website
                  <img src="./arrow-right.svg" alt="">
              </a>
          </div>
        </div>
        <div class="w-[450px]">
          <img src="MacBook.png" alt="">
        </div>
        </div>
    </section>
    <section>
      <div class=" pt-10 my-20 mb-5 action mx-auto flex justify-center items-center gap-5">
        <a href="#" class="button-primary ">Our Work</a>
      </div>
    </section>

    <section class="container mx-auto">
      <div class="justify-between lg:max-w-[1700px] mx-auto">
        <h1 class="font-bold text-[35px]"><span class="gradient"> What people say about</span> <br>
          Mangcoding Team?</h1>
          <div class="grid grid-cols-2 gap-2 justify-between lg:max-w-[1700px] mx-auto">
            <div class="ml-10 mt-10">
              <div>
                <img src="riko.jp.png" alt="">
                <h5 class="font-bold">Riko Sapto Dimo</h5>
                <p>Managing Director Orely.co</p>
              </div>
              <div>
                <img class="w-[100px]" src="rikoo.png" alt="">  
                <h5 class="font-bold">Riko Sapto Dimo</h5> 
                <p>Managing Director Orely.co</p>
            </div>
          </div>
          <div>

              <img class="w-[30px]" src="Vector.png" alt="">
         
            <h5>It was a great experience to work with Mangcoding, we love the details result, and professionalism.</h5>
            <h5 class="font-bold">Riko Sapto Dimo</h5>
            <div class="flex flex-wrap  ">
              <svg fill="currentColor" width="25" height="25" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
              <svg fill="currentColor" width="25" height="25" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
              <svg fill="currentColor" width="25" height="25" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
              <svg fill="currentColor" width="25" height="25" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
              <svg fill="currentColor" width="25" height="25" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="pt-10 text-center justify-center flex text-[40px]">
        <h3 >Our</h3>
        <h3 class="font-bold">Blog</h3>
      </div>
      <div class=" container pt-10 grid grid-cols-3 gap-3 justify-between lg:max-w-[1700px] mx-auto">
        <div class="lg:max-w-[800px] mx-auto">
          <img src="foto1.png" alt="">
          <h4 class="font-bold text-[16px]">8 Alasan Pentingnya Melakukan Pencadangan Situs Web</h4>
          <p class="text-[14px]">September 2, 2022</p>
          <p class="text-[14px]">Lörem ipsum farade kroresade planat. Semipons ner, deciliga men niponade. </p>
        </div>
        <div class="lg:max-w-[750px] mx-auto">
          <img src="foto2.png" alt="">
          <h4 class="font-bold text-[16px]">8 Alasan Pentingnya Melakukan Pencadangan Situs Web</h4>
          <p class="text-[14px]">September 2, 2022</p>
          <p class="text-[14px]">Lörem ipsum farade kroresade planat. Semipons ner, deciliga men niponade. </p>
        </div>
        <div class="lg:max-w-[750px] mx-auto">
          <img src="foto3.png" alt="">
          <h4 class="font-bold text-[16px]">8 Alasan Pentingnya Melakukan Pencadangan Situs Web</h4>
          <p class="text-[14px]">September 2, 2022</p>
          <p class="text-[14px]">Lörem ipsum farade kroresade planat. Semipons ner, deciliga men niponade. </p>
        </div>
        
      </div>
      <div class="pt-10 mb-5 action flex mx-auto justify-center items-center gap-5">
        <a href="#" class="button-primary">Our Work</a>
      </div>
    </section>  

    <section class="py-10 bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200">
      <div class="font-base mx-16 mt-20 flex flex-wrap item-center justify-between py-10">
        <div class="">
          <h2 class="font-bold text-[35px]">Let's build a website with mangcoding</h2>
          <p class="w-[550px] text-[15px]">Mangcoding team will help you in branding your product</p>
        </div>
        <div>
          <button class="button-primary mr-20">Build Website Now</button>
        </div>
    </section>
</body>
</html>