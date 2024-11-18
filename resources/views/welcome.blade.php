<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}"> -->
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
       <!-- Alpine.js -->

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    
        <style type="text/tailwindcss">
            @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
            }
            
            body {
              /* border:2px solid red; */
            }
            </style>

    </head>
    <body class="">
        <div class="h-full   main-banner-wrapper">
        <div class="container 		 mx-auto	">
 

<header>
     <nav
        class="
          flex flex-wrap
          items-center
          justify-between
          w-full
          py-4
          navbar-custom
          px-8
             pt-6
          text-lg text-gray-700
          
        "
      >
       <div>
          <a href="#">
          <img class="w-100"   width="150" src="{{ URL('assets/logomain.png') }}"    alt="sssss">
          </a>
        </div>
       
         <svg
            xmlns="http://www.w3.org/2000/svg"
            id="menu-button"
            class="h-6 w-6 cursor-pointer md:hidden block"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
       
       <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
          <ul
            class="
              pt-4
              text-base text-gray-700
              md:flex
              md:justify-between 
              md:pt-0"
          >
            <li>
              <a class="md:p-4 py-2 block hover:text-white-400 active" href="#"
                >Home</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block hover:text-white-400" href="#"
                >About US</a
              >
            </li>
            <li class="md:ml-4 md:mt-4">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" 
                class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">
                Service
                <svg class="w-4 h-4 ml-1" fill="#FE7747" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">    Specialties</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                    </li>
                    </ul>
                    <div class="py-1">
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                    </div>
                </div>
            </li>
            <li class="md:ml-4 md:mt-4">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                 class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">
                 Specialties
                  <svg class="w-4 h-4 ml-1 text-custom" fill="#FE7747" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" 
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                     clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden dropdown-custom  bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">    Specialties</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                    </li>
                    </ul>
                    <div class="py-1">
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                    </div>
                </div>
            </li>
            <li>
              <a
                class="md:p-4 py-2 block 0"
                href="#"
                >Our Customers</a
              >
            </li>
          </ul>
        </div>
    
        <div class="mb-4 text-center	  md:mb-0 md:w-1/1 hidden sm:block">
    
    <button class="hover:bg-red-700 text-white font-bold  pt-1 pb-1 pr-6 pl-6 rounded-full bg-[#FE7747] meet-btn ">MEET US</button>
  <div>
      </nav>
    
  </header>

  <div class="line-wrapper text-center">
  <img class="object-cover all-line" src="{{ URL('assets/all line.png') }}"    alt="sssss">
        <div class="banner-wrapper">
             <div class="inner-content text-center">
              <h1 class="hidden md:block">Transforming Medical Billing Where <span>Accuracy</span> Meets <span> Ingenuity</span></h1>
              <h1 class=" sm-block">We Help You tho Grow Your  <span>Business</span></h1>
              <p class="hidden md:block">Welcome to Mediclaims Solutions. Our company has been operating with accuracy, efficiency, and integrity, emerging in healthcare revenue cycle management by simplifying processes and allowing providers to concentrate on quality care at the end of service.</p>
             
            <button class=" hover:bg-emerald-300 text-white font-bold py-2 px-4 rounded-full started-btn mt-12 bg-[#53BD95]">GET STARTED 
               <span class="icon-arrow bg-[#FFFFFF] rounded-full  p-2 ml-4 ">
            <svg width="10" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.52253 4.55728L12.3008 4.60379M12.3008 4.60379L8.97079 1.1249M12.3008 4.60379L8.94089 8.0538" stroke="#53BD95" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            </span>
           </button>
            </div>
        </div>
       
         
           
        </div>


    
        </div>
       
        </div>

     <!-- -----------dashboard----------- -->
      <div class="container">
     <div class="bg-white-300 text-center dashboard-section">
     <div class="section-dashboard">
         <div  onclick="scrollDown()" class="scroll-btn scroll-down">
          <p>Scroll  Down</p>
          <span class="icon-arrow bg-[#FFFFFF] rounded-full  p-2 ml-4 ">
          <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.99842 1.06396V17.7448M6.99842 17.7448L12.3601 12.568M6.99842 17.7448L1.63672 12.568" stroke="#FF7352" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          </span>
          </div>

            <img class="object-cover" src="{{ URL('assets/Dashboardui.svg') }}"    alt="">
     
     </div>
     </div>
     </div>
        <!-- ----------------------dashboard------------ -->

        <section class="section-users  mb-3">
          <div class="container mx-auto px-4">
        <h4 class="mt-8 text-center">MORE THAN  10,000 USERS USE MRR.</h4>
        <!-- <div class="p-2 mt-6 bg-green-200 text-green-800 flex flex-wrap text-center mx-auto gap-2"> -->
          
        <div class="grid-cols-10 mx-auto  mt-2 ">
        <div class="flex-custom mt-4 mb-4">
 
        <div class="contain-item  rounded p-5">
        <img class="object-item" src="{{ URL('assets/airbnb.png') }}"    alt="sssss">
        </div>
    
        <div class="contain-item  rounded p-5">
        <img class="object-item" src="{{ URL('assets/union.png') }}"    alt="sssss">
        </div>

        <div class="contain-item rounded p-5">
        <img class="object-item" src="{{ URL('assets/google.png') }}"    alt="sssss">
        </div>

        <div class="contain-item  rounded p-5">
        <img class="object-item" src="{{ URL('assets/Microsoft.png') }}"    alt="sssss">
        </div>

        <div class="contain-item  rounded p-5">
        <img class="object-item" src="{{ URL('assets/fedex.png') }}"    alt="sssss">
        </div>

        </div>

        </div>
        <div class="p-2 customer-content  mt-6 grid md:grid-cols-2 gap-2">
            <div class="p-5 ">
            <img class="object-cover" src="{{ URL('assets/customers.png') }}"    alt="sssss">
            </div>
            <div class=" p-5 customers-text">
            <h6>Does your website suck at acquiring <span>customers</span> ?</h6>
            <p>Are ?MA constantly cosskIng up new acquisition stewing-es but failing to see the results? There's probably a tonne of pressure on you to get more  But design is hard. Folding the right customers Is hard. </p>
            </div>
          </div>
        </div>
        </section>
        
    
        <section class="website-section mt-3 mb-3">
        <div class="p-2  grid md:grid-cols-2 gap-2">
           
            <div class=" p-5 website-text sm:order-last">
            <div class="">
            <img class="object-stars" src="{{ URL('assets/stars.png') }}"    alt="sssss">
            </div>
            <div class="website-inner p-5">
            <h6>A  <span>website</span> that your customers is killing your business</h6>
            <p>Yet hod any tor iraxening assistance ∎nulgerice unpleasIng. Nol thoughts WI exercise blessing. Indulgence way everything icy allefation boistecous the attachment. 
            </p>

            <button class=" hover:bg-emerald-300 text-white font-bold py-2 px-4 rounded-full read-btn mt-12 bg-[#53BD95]">Read More 
               <span class="icon-arrow bg-[#6ECEAA] rounded-full  p-2 ml-4 ">
            
               <svg width="9" height="10" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L8 7L1 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>

            </span>
           </button>
            </div>
            </div>

            <div class="p-5  sm:order-1">
            <img class="object-cover" src="{{ URL('assets/status.png') }}"    alt="sssss">
            </div>
          </div>
        </div>
        </section> 


      



        <section class="business-section">
          <div class="container mx-auto">
          <div class="p-5 ">
            <img class="object-cover img-business" src="{{ URL('assets/business-service.png') }}"    alt="sssss">
            </div>
            </div>
        </section>

        <section class="Clients-section">
        <h4 class="section-heading text-center">What Our <span>Clients</span> Says</h4>
        


          <div class="slider-wrapper">

          <div class="main-sec">
            <div class="slide-sec">
            </div>
          </div>
          </div>




        </section>


        <!-- ---------------footer-start------------ -->

        <footer class="bg-[#101512]">

        <div class="max-w-screen-xl px-4 pt-6  mx-auto sm:px-6 lg:px-8 lg:pt-14">
      <div class="text-center sm:flex sm:justify-between sm:text-left">
               <div>
               <img class="object-cover" src="{{ URL('assets/logofooter.png') }}"    alt="sssss">
               </div>
      </div>
    </div>
  </div>
  
  <div class="max-w-screen-xl px-4 pt-16 pb-6 mx-auto sm:px-6 lg:px-8 lg:pt-10">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
    
    <div
        class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 md:grid-cols-4"
      >
        <div class="text-center sm:text-left">
          <p class="text-lg font-medium text-white">About Us</p>

          <nav class="mt-6">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                  Company History
                </a>
              </li>

              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                  Meet the Team
                </a>
              </li>

              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                  Employee Handbook
                </a>
              </li>

              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                  Careers
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="text-center sm:text-left">
          <p class="text-lg font-medium text-white">Our Services</p>

          <nav class="mt-6">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                  Web Development
                </a>
              </li>

              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                  Web Design
                </a>
              </li>

              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                  Marketing
                </a>
              </li>

              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                  Google Ads
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="text-center sm:text-left">
          <p class="text-lg font-medium text-white">Helpful Links</p>

          <nav class="mt-6">
            <ul class="space-y-4 text-sm">
              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
                Blogs
                </a>
              </li>

              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
              
                Case Studies
                </a>
              </li>

              <li>
                <a
                  class="flex group justify-center sm:justify-start gap-1.5"
                  href="/"
                >
                  <span class="text-[#717271] transition group-hover:text-white/75">
        
Videos

                  </span>

                </a>
              </li>
              <li>
                <a class="text-[#717271] transition hover:text-white/75" href="/">
              
                Sitemap
                </a>
              </li>

            </ul>
          </nav>
        </div>

       
      </div>
    
    <div>

        <div class="flex justify-center text-teal-300 sm:justify-start">        
           <h3 class="text-lg font-medium text-white newsletter">Join our newsletter</h3>
        </div>

        <form class="search-wrapper cf">
        <input type="text" placeholder="hellogmail.com" required style="box-shadow: none">
        <button type="submit">Subscribe Now</button>
        </form>

        <ul class="flex  gap-2 mt-14 md:gap-2 sm:justify-end">
          <li>
            <a
              href="/"
              rel="noopener noreferrer"
              target="_blank"
              class="text-white-500 transition hover:text-white-500/75"
            >
              <span class="sr-only">Facebook</span>
             



              <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_b_1_326)">
              <circle cx="19" cy="19" r="19" fill="#333936"/>
              </g>
              <path d="M24 16.3077H20.6667V13.3846C20.6667 12.5778 21.264 12.6538 22 12.6538H23.3333V9H20.6667C18.4573 9 16.6667 10.9628 16.6667 13.3846V16.3077H14V19.9615H16.6667V28H20.6667V19.9615H22.6667L24 16.3077Z" fill="white"/>
              <defs>
              <filter id="filter0_b_1_326" x="-10" y="-10" width="58" height="58" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feGaussianBlur in="BackgroundImageFix" stdDeviation="5"/>
              <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_1_326"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1_326" result="shape"/>
              </filter>
              </defs>
              </svg>

            </a>
          </li>

          

          
          <li>
            <a
              href="/"
              rel="noopener noreferrer"
              target="_blank"
              class="text-white-500 transition hover:text-white-500/75"
            >
              <span class="sr-only">Twitter</span>
             


              <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_b_1_323)">
                <circle cx="19.2969" cy="19" r="19" fill="#333936"/>
                </g>
                <path d="M29 12.7758C28.2934 13.0769 27.5406 13.2765 26.7556 13.3735C27.5631 12.905 28.1794 12.1688 28.4692 11.2815C27.7163 11.7177 26.8851 12.0258 25.9992 12.1977C25.2843 11.4581 24.2654 11 23.1539 11C20.9974 11 19.2613 12.7008 19.2613 14.7858C19.2613 15.0858 19.2874 15.3742 19.3516 15.6488C16.1132 15.4954 13.2478 13.9873 11.3229 11.69C10.9868 12.2565 10.7897 12.905 10.7897 13.6031C10.7897 14.9138 11.4844 16.0758 12.5199 16.7485C11.8941 16.7369 11.2801 16.5604 10.76 16.2823C10.76 16.2938 10.76 16.3088 10.76 16.3238C10.76 18.1631 12.1102 19.6908 13.8807 20.0427C13.5637 20.1269 13.2181 20.1673 12.8595 20.1673C12.6101 20.1673 12.3584 20.1535 12.1221 20.1027C12.6267 21.6015 14.0589 22.7035 15.7618 22.7392C14.4365 23.7465 12.7538 24.3535 10.9322 24.3535C10.6128 24.3535 10.3064 24.3396 10 24.3015C11.7254 25.3827 13.7703 26 15.9755 26C23.1432 26 27.062 20.2308 27.062 15.23C27.062 15.0627 27.0561 14.9012 27.0478 14.7408C27.8208 14.2077 28.4704 13.5419 29 12.7758Z" fill="white"/>
                <defs>
                <filter id="filter0_b_1_323" x="-9.70312" y="-10" width="58" height="58" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feGaussianBlur in="BackgroundImageFix" stdDeviation="5"/>
                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_1_323"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1_323" result="shape"/>
                </filter>
                </defs>
                </svg>



            </a>
          </li>
        
          <li>
            <a
              href="/"
              rel="noopener noreferrer"
              target="_blank"
              class="text-white-500 transition hover:text-white-500/75"
            >
              <span class="sr-only">Twitter</span>
         
          <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_b_1_320)">
          <circle cx="19.5938" cy="19" r="19" fill="#333936"/>
          </g>
          <path d="M13.2557 25H15.6421V15.1071H13.2557V25ZM14.4659 13.9286C15.3012 13.9286 15.9319 13.2857 15.9319 12.4643C15.9319 11.6429 15.3012 11 14.4659 11C13.6136 11 13 11.6429 13 12.4643C13 13.2857 13.6136 13.9286 14.4659 13.9286Z" fill="white"/>
          <path d="M24.6136 25H27V19.1964C27 16.4643 25.4318 14.9643 23.2329 14.9643C22.0226 14.9643 20.9999 15.5 20.3863 16.3393V15.1071H17.9999V25H20.3863V19.5357C20.3863 17.9464 21.2215 17.0893 22.517 17.0893C23.7784 17.0893 24.6136 17.9464 24.6136 19.5357V25Z" fill="white"/>
          <defs>
          <filter id="filter0_b_1_320" x="-9.40625" y="-10" width="58" height="58" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feGaussianBlur in="BackgroundImageFix" stdDeviation="5"/>
          <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_1_320"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1_320" result="shape"/>
          </filter>
          </defs>
          </svg>
            </a>
          </li>
          
        </ul>
      </div>

    
    </div>

    <div class="pt-6 mt-12 border-t border-gray-800">
      <div class="text-center sm:flex sm:justify-between sm:text-left">
        <p class="text-sm text-gray-400">
          <!-- <span class="block sm:inline">All rights reserved.</span> -->

          <a
            class="inline-block text-teal-500 underline transition hover:text-teal-500/75"
            href="/"
          >
            <!-- Terms & Conditions -->
          </a>

          <span>&middot;</span>

          <a
            class="inline-block text-teal-500 underline transition hover:text-teal-500/75"
            href="/"
          >
            <!-- Privacy Policy -->
          </a>
        </p>

        <p class="mt-4 text-sm text-gray-500 sm:order-first sm:mt-0">
          <!-- &copy; 2022 Company Name -->
        </p>
      </div>
    </div>
  </div>
</footer>




<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script>


const button = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');


button.addEventListener('click', () => {

  menu.classList.toggle('hidden');
});

$(function() {
    $('.scroll-down').click (function() {
      // alert("ss");
      $('html, body').animate({scrollTop: $('section.ok').offset().top }, 'slow');
      return false;
    });
  });



  // --------------scroll-down--------------



  function scrollDown() {
      window.scrollTo({
        top: document.body.scrollHeight, // Scroll to the bottom
        behavior: 'smooth' // Smooth scroll animation
      });
    }


  // --------------scroll-down--------------


$(document).ready(function(){
  var singleSliderObj = [
    {index:1,  imgsrc:"../assets/person.png", desctext:" I was looking for a perfect payment solution for my freelance business.I'm using Payola as my primary payment method and I will recommend everyone who needs a best payment solution",  place:"Sayed Rahman- Co Founder of Design Ocean."},
    {index:2,  imgsrc:"../assets/person.png", desctext:"I was looking for a perfect payment solution for my freelance business.I'm using Payola as my primary payment method and I will recommend everyone who needs a best payment solution.",  place:"Sayed Rahman- Co Founder of Design Ocean"},
    {index:3,  imgsrc:"../assets/person.png", desctext:"I was looking for a perfect payment solution for my freelance business.I'm using Payola as my primary payment method and I will recommend everyone who needs a best payment solution.", place:"Sayed Rahman- Co Founder of Design Ocean."},
    {index:4,  imgsrc:"../assets/person.png", desctext:"I was looking for a perfect payment solution for my freelance business.I'm using Payola as my primary payment method and I will recommend everyone who needs a best payment solution.",  place:"Sayed Rahman- Co Founder of Design Ocean"},
    {index:5,  imgsrc:"../assets/person.png", desctext:"I was looking for a perfect payment solution for my freelance business.I'm using Payola as my primary payment method and I will recommend everyone who needs a best payment solution.",   place:"Sayed Rahman- Co Founder of Design Ocean"}
  ];

  function outputIt() {
    for (var i = 0; i < singleSliderObj.length; i++) {
      // console.log(outputs);
      var outputs = '<div id="'+ singleSliderObj[i].index +'">'+
          '<div class="singlecard">'+
          '<div class="singlecard-header">'+
          '<img data-lazy="'+ singleSliderObj[i].imgsrc +'">'+
          '</div>'+
          '<div class="singlecard-body">'+
          '<div class="singlecard-content">'+
          
          '<div class="singlecard-text">'+
          '<p style="font-size: 1.5rem;">'+ singleSliderObj[i].desctext +'</p>'+
          '<p>'+
   
          '<span class="singlecard-place"><em> --- '+ singleSliderObj[i].place +'</em></span>'+
          '</p>'+
          '</div>'+
          '</div>'+
          '</div>';
      $('.slide-sec').append(outputs);
    }
  }
  outputIt();

  $('.slide-sec').slick({
    lazyLoad: 'ondemand',
    // speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    autoplaySpeed: 5000,
    dots:true
  });
});

</script>

    </body>

    </html>
