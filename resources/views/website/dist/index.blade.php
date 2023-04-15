<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StackATS - Home</title>
  <!-- output css file -->
  <link rel="stylesheet" href="{{ asset('css/output.css') }}">
  <!-- fonts cdn -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
  <!-- tailwindcss cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Red Hat Display', sans-serif;
    }
  </style>
</head>

<body class="md:bg-red-200 lg:bg-white">


  <header class="absolute sticky mx-auto p-3 lg:p-0 left-0 top-0 z-50 bg-white/90 w-full backdrop-blur">
    <div class="lg:mx-auto max-w-7xl mx-5 w-auto mt-5">
      <div class="relative flex h-full items-center justify-between my-auto">
        <!-- logo -->
        <a href="index.html">
          <img src="../images/logo.svg" alt="logo" class="w-32 lg:w-40">
        </a>
        <!-- Nav Toggle Button -->
        <button id="menu" class="
            lg:hidden
            p-2
            focus-visible:ring-sky-100
            text-slate-700
            hover:text-neutral-600
            transition-colors
            " aria-expanded="false" aria-label="Open Menu">


          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
          </svg>


        </button>

        <div role="menubar" class="
            hidden
            flex-col
            gap-4
            absolute
            z-40
            right-0
            left-0
            rounded-lg
            top-16
            shadow-sm
            bg-white
            text-left
            p-6
            border
            text-lg
            items-left
            w-auto
            border-sky-200
            lg:flex
            lg:flex-row
            lg:static
            lg:border-none
            lg:space-x-8
            lg:items-center
            lg:bg-transparent
            lg:shadow-none
            ">
          <a href="#" class="hover:text-slate-400 duration-200">Home</a>
          <a href="#" class="hover:text-slate-400 duration-200">About</a>
          <a href="#" class="hover:text-slate-400 duration-200">How It Works</a>
          <a href="#" class="hover:text-slate-400 duration-200">Contact</a>

          <!-- get started button -->
          <a href="{{ route('reg_page') }}" class="btn px-8 text-white text-center text-md">Get Started</a>
        </div>
      </div>
    </div>
  </header>
  <!-- end of header -->



  <!-- hero section -->
  <div class="relative mt-20 lg:mt-0">
    <div class="mx-auto max-w-7xl">
      <div class="flex flex-wrap px-8 md:px-6">

        <!-- text -->
        <div class="w-full lg:w-5/12 text-center lg:text-left my-auto">
          <h1 class="text-slate-700 font-bold text-4xl">Streamline Your School's
            Admissions Process with StackATS</h1>
          <p class="text-slate-500/70 text-lg mt-5 mb-4">
            Manage your school's admissions with ease using StackATS.
            Our platform simplifies the application process,
            saving you time and effort.
          </p>
          <a href="register.html" class="mt-5 text-white btn">Get Started Today</a>
        </div>

        <!-- image -->
        <div class="w-full md:w-8/12 lg:w-6/12 lg:ml-20 md:mx-auto">
          <div class="relative z-10 inline-block mt-14 lg:mt-0">
            <img src="../images/landing-page/hero-illustration.svg" alt="hero section image" class="max-w-full lg:ml-auto">
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end hero section -->


  <!-- about section -->

  <section class="relative pt-40">
    <div class="mx-auto max-w-7xl">
      <div class="grid grid-cols-1 md:grid-cols-2 px-8 md:px-6 items-center">

        <!-- image -->
        <div class="md:w-10/12 lg:w-9/12 md:mx-auto">
          <img src="../images/landing-page/about-us.svg" alt="About Us">
        </div>

        <!-- text -->
        <div class="mt-8 md:mt-0 lg:mt-0 w-full">
          <h1 class="text-slate-700 font-bold text-3xl">About StackATS - Streamlining Admissions with Modern Technology</h1>
          <p class="mt-4 text-slate-500 text-sm lg:text-lg">
            StackATS is a user-friendly admissions management system
            that streamlines the process of managing school
            applications. Our platform is designed to make it
            easy for schools to customize application forms,
            set up document upload and submission requirements,
            and manage applications in one centralized dashboard.
            With our solution, schools can reduce administrative
            workload, save time, and focus on finding the right
            students for their programs. Our team has years of
            experience in education and a deep understanding of
            the challenges schools face, which is why we've created
            StackATS to provide a solution that makes admissions
            simple and hassle-free.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- END about section -->


  <!-- how it works -->

  <section class="relative pt-40">
    <div class="mx-auto max-w-7xl">

      <div class="max-w-3xl px-8 md:px-6">
        <h1 class="text-slate-700 font-bold text-3xl">
          How StackATS Works
        </h1>
        <p class="mt-4 text-slate-500">
          StackATS is a user-friendly school admission
          management system that streamlines the application
          process for both administrators and applicants.
          Here's how it works:
        </p>
      </div>


      <!-- how-it-works grids -->
      <div class="grid grid-cols-1 mt-10 ml-6 gap-6 max-w-7xl mx-auto md:grid-cols-2 lg:grid-cols-3">

        <!-- col 1 -->
        <div class="px-6 py-8 bg-white rounded-xl shadow-vague">
          <img src="../images/how-it-works-1.svg" alt="stacked icon" class="w-7">
          <h3 class="font-bold text-1xl mt-5">Create your school's account and set up your admission process.</h3>
          <p class="mt-3 text-sm">
            Sign up for StackATS and create your school's account.
            Customize your application forms to collect the information
            you need from applicants. Set up document upload
            and submission requirements for applicants.

          </p>
        </div>

        <!-- col 1 -->
        <div class="px-6 py-8 bg-white rounded-xl relative top-10 bottom-0 shadow-vague">
          <img src="../images/how-it-works-2.svg" alt="stacked icon" class="w-10">
          <h3 class="font-bold text-1xl mt-5">Applicants can easily apply online and upload required documents</h3>
          <p class="mt-3 text-sm">
            Applicants can easily apply to your school online using StackATS.
            They can also save their progress and return to complete their
            application at any time. Applicants can upload required documents
            directly to the application portal.
          </p>
        </div>


        <!-- col 1 -->
        <div class="px-6 py-8 bg-white rounded-xl shadow-vague">
          <img src="../images/how-it-works-3.svg" alt="stacked icon" class="w-7">
          <h3 class="font-bold text-1xl mt-5">Review and manage applications in one centralized dashboard</h3>
          <p class="mt-3 text-sm">
            You can manage all applications in one centralized dashboard.
            Review and evaluate each application based on your admission
            criteria and requirements. Communicate with applicants through
            StackATS, including sending notifications about application
            status updates and requesting additional information or documentation.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- END how it works -->


  <!-- cta -->

  <section class="relative pt-40">
    <div class="mx-auto max-w-7xl bg-gradient-to-r from-sky-400 to-sky-300 rounded-none xl:rounded-2xl lg:p-20 p-5 sm:pb-10 md:pb-0 text-center items-center 
                  md:text-left md:items-start">

      <div class="grid items-center grid-cols-1 md:grid-cols-2 px-8 md:p-10">
        <!-- text -->
        <div class="mt-10 md:mt-20 lg:mt-0 mb-20 lg:mb-0 lg:items-center w-full text-white my-auto">
          <h1 class="font-semibold text-4xl">Get Started With StackATS Today</h1>
          <p class="text-lg mt-5 mb-5 md:text-sm">
            Ready to streamline your school's admissions process?
            Sign up for StackATS today and experience the benefits of a
            modern, user-friendly admissions management system.
          </p>
          <a href="register.html" class="mt-5 text-sky-400 rounded-full bg-white p-4 font-semibold">Get Started Today</a>
        </div>

        <!-- image -->
        <div class="w-10/12 md:w-8/12 lg:w-8/12 lg:ml-20 mx-auto">
          <div class="relative z-10 inline-block mt-14 lg:mt-0">
            <img src="../images/landing-page/cta.svg" alt="call-to-action image" class="max-w-6/12 lg:ml-auto">
          </div>
        </div>

      </div>


    </div>
  </section>

  <!-- END cta -->


  <!-- footer -->

  <footer class="bg-zinc-800 pt-20 lg:p-20 p-10 mt-40">
    <div class="mx-auto max-w-7xl">

      <div class="grid lg:grid-cols-6 lg:gap-10 gap-20">

        <!-- col 1 -->
        <div class="lg:col-span-2">
          <a href="index.html">
            <img src="../images/logo.svg" alt="logo image" class="w-40">
          </a>
          <p class="text-slate-400 mt-4 lg:text-sm">
            StackATS simplifies school admissions, streamlining
            applications with customizable forms,
            document uploads, and a centralized
            dashboard. Save time and reduce
            workload with our user-friendly solution.
          </p>
        </div>

        <!-- col 2 -->
        <div class="">
          <ul class="text-lg md:text-md">
            <li><a href="#" class="text-sky-400">Apply Now</a></li>
            <li><a href="#" class="text-slate-500 hover:text-sky-400 duration-200">FAQ</a></li>
            <li><a href="#" class="text-slate-500 hover:text-sky-400 duration-200">Services</a></li>
            <li><a href="#" class="text-slate-500 hover:text-sky-400 duration-200">Resources</a></li>
          </ul>
        </div>


        <!-- col 3 -->
        <div class="">
          <ul class="text-lg md:text-md">
            <li><a href="#" class="text-slate-500 hover:text-sky-400 duration-200">Affiliates</a></li>
            <li><a href="#" class="text-slate-500 hover:text-sky-400 duration-200">Partners</a></li>
            <li><a href="#" class="text-slate-500 hover:text-sky-400 duration-200">Donations</a></li>
            <li><a href="#" class="text-slate-500 hover:text-sky-400 duration-200">Founders</a></li>
            <li><a href="#" class="text-slate-500 hover:text-sky-400 duration-200">Our Team</a></li>
          </ul>
        </div>



        <!-- col 4 -->
        <div class="lg:col-span-2">
          <h1 class="text-white text-2xl">Subscribe To Our Newsletter</h1>

          <div class="border border-slate-600 mt-5 rounded-full w-[90%] md:w-[60%] lg:w-full">

            <!-- input field box -->
            <div class="p-1.5 flex justify-between">
              <input class="font-semibold text-white lg:text-sm outline-none bg-transparent ml-3" type="email" placeholder="123@example.com">
              <button type="submit" class="px-6 py-4 lg:p-2.5
                       lg:text-sm xl:mr-0 xl:px-5 xl:py-3 bg-sky-400 text-white rounded-full">Subscribe</button>
            </div>
          </div>
          <!-- icons -->
          <div class="mt-5 flex justify-center space-x-16 lg:space-x-10 md:justify-start">
            <a href="#">
              <img src="../images/dribbble.svg" alt="dribble icon" class="w-8 lg:min-w-[25px]">
            </a>
            <a href="#">
              <img src="../images/dropbox.svg" alt="dropbox icon" class="w-8 lg:min-w-[25px]">
            </a>
            <a href="#">
              <img src="../images/instagram.svg" alt="dribble icon" class="w-8 lg:min-w-[25px]">
            </a>
            <a href="#">
              <img src="../images/facebook.svg" alt="dribble icon" class="w-8 lg:min-w-[25px]">
            </a>
            <a href="#">
              <img src="../images/figma-1.svg" alt="dribble icon" class="w-8 lg:min-w-[25px]">
            </a>
          </div>
        </div>

      </div>

      <hr class="my-20 opacity-20">

      <div class="grid grid-cols-1 md:grid-cols-2 md:justify-between">
        <p class="mb-5 md:mb-0 text-slate-500">&copy; Copywright Web Design & Development</p>

        <div class="space-x-6 md:ml-auto">
          <a href="#" class="text-slate-300 underline">Terms and Conditions</a>
          <a href="#" class="text-slate-300 underline">Privacy Policy</a>
        </div>
      </div>

  </footer>

  <!-- footer -->
  <script src="./main.js"></script>

</body>

</html>