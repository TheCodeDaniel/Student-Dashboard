<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard</title>
  <!-- output css file -->
  <link rel="stylesheet" href="{{ asset('css/output.css') }}" />
  <!-- fonts cdn -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet" />
  <!-- tailwindcss cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: "Red Hat Display", sans-serif;
      padding: 0;
      margin: 0;
    }
  </style>
</head>

<body class="bg-[#fafafa] w-[80%] mx-auto">
  <div class="grid grid-cols-12 gap-5">


    <!-- sidebar -->
    <div class="col-span-1 bg-sky-400 rounded-[30px] shadow-vague h-[98vh] my-auto">



      <div class="icons flex flex-col mt-10">

        <!-- logo -->
        <img src="../images/small-logo.svg" alt="small logo" class="w-8 m-auto">



        <div class="other-icons mt-2 my-auto">

          <!-- dashboard icon -->
          <a href="">
            <div class="mt-12 px-2 py-4 bg-sky-100/30 w-10/12 m-auto rounded-xl ">
              <img src="../images/dashboard-icons/dashboard-tab-active.svg" class="m-auto" alt="dashboard-icon">
            </div>
          </a>

          <!-- archive icon -->
          <a href="">
            <div class="mt-8">
              <img src="../images/dashboard-icons/archive-book.svg" class="m-auto" alt="dashboard-icon">
            </div>
          </a>

          <!-- chats icon -->
          <a href="">
            <div class="mt-8">
              <img src="../images/dashboard-icons/chats.svg" class="m-auto" alt="dashboard-icon">
            </div>
          </a>

          <!-- schedule(menu) icon -->
          <a href="">
            <div class="mt-8">
              <img src="../images/dashboard-icons/menu-board.svg" class="m-auto" alt="dashboard-icon">
            </div>
          </a>

          <!-- chart icon -->
          <a href="">
            <div class="mt-8">
              <img src="../images/dashboard-icons/chart-2.svg" class="m-auto" alt="dashboard-icon">
            </div>
          </a>

          <!-- settings icon -->
          <a href="">
            <div class="mt-8">
              <img src="../images/dashboard-icons/setting.svg" class="m-auto" alt="dashboard-icon">
            </div>
          </a>

          <!-- business icon -->
          <a href="">
            <div class="mt-8">
              <img src="../images/dashboard-icons/book-1.svg" class="m-auto" alt="dashboard-icon">
            </div>
          </a>

        </div>

        <!-- logout icon -->
        <a href="/logout">
          <div class="mt-10 m-auto">
            <img src="../images/dashboard-icons/log-out.svg" class="m-auto" alt="dashboard-icon">
          </div>
        </a>


      </div>
    </div>



    <!-- end of sidebar -->



    <div class="col-span-11 gap-16 p-2 h-screen overflow-y-scroll">
      <!-- main content -->
      <main>
        <!-- navbar -->
        <div class="grid grid-row-1 row-span-full bg-white p-4 rounded-[30px] shadow-vague">
          <div class="flex justify-between">
            <!-- dashboard text -->
            <div class="my-auto">
              <h1 class="text-2xl font-semibold opacity-60 tracking-tighter">
                Dashboard
              </h1>
            </div>

            <!-- navbar options/ icons -->
            <div class="flex flex-wrap space-x-6">
              <!-- messages -->
              <button class="border relative border-slate-200 rounded-full p-3">
                <div class="blue-dot absolute p-1 bg-sky-400 rounded-full top-0 right-2"></div>
                <img src="../images/dashboard-icons/message.svg" alt="" />
              </button>
              <!-- notifications -->

              <button class="border border-slate-200 rounded-full p-3">
                <img src="../images/dashboard-icons/notification.svg" alt="" />
              </button>

              <!-- profile -->
              <div class="">
                <img src="../images/user.jpg" class="h-12 w-12 object-cover rounded-full" alt="user-image" />
              </div>
            </div>
            <!-- end of navbar options -->
          </div>
        </div>

        <!-- status -->
        <div class="grid grid-row-1 mt-3 row-span-full bg-white px-5 py-8 rounded-[30px] shadow-vague">
          <div class="grid grid-row-2 row-span-full gap-1">
            <!-- row 1 -->
            <div class="flex justify-between">
              <h1 class="text-xl font-bold">Status</h1>

              <!-- last checked -->
              <!-- <div class="last-checked text-xs text-gray-400 my-auto">
                <span>Last checked : </span>
                <b>13<sup>th</sup> March, 2023</b>
              </div> -->
            </div>

            <!-- row 2 -->
            <div class="flex justify-between mt-2">
              <p class="w-6/12 text-sm text-gray-400 mt-2 my-auto">
                Your application is undergoing the screening and assessment
                process. Please be patient with us, as your results will be
                available soon.
              </p>

              <div class="status badge my-auto text-center">



                @if ($data->application_status == "pending")
                <div class="badge bg-gray-100 text-gray-500 px-14 py-3 font-semibold rounded-full w-full text-1xl">
                  {{ $data->application_status }}
                </div>
                @endif

                @if ($data->application_status == "approved")
                <div class="badge bg-green-500/30 text-green-500 px-14 py-3 font-semibold rounded-full w-full text-1xl">
                  {{ $data->application_status }}
                </div>
                @endif

                @if ($data->application_status == "declined")
                <div class="badge bg-red-500/30 text-red-500 px-14 py-3 font-semibold rounded-full w-full text-1xl">
                  {{ $data->application_status }}
                </div>
                @endif


              </div>
            </div>
          </div>
        </div>

        <!-- application -->
        <div class="grid grid-row-1 mt-3 row-span-full bg-white p-5 rounded-[30px] shadow-vague">
          <h2 class="font-bold text-xl">My Application</h2>
          <p class="w-6/12 text-sm text-gray-400 mt-2 my-auto">
            Fill in the inputs with valid information to successfully apply.
          </p>

          <hr class="opacity-60 my-5" />

          <div class="grid grid-cols-6">
            <!-- col 1 -->
            <div class="col-start-1 col-span-4">
              <!-- student form -->
              <form action="{{ route('create') }}" method="post">
                @csrf
                <div class="results">
                  @if (Session::get('error'))
                  <div class="alert alert-danger">
                    {{ Session::get('error') }}
                  </div>
                  @endif
                </div>
                <div class="grid grid-cols-4">
                  <div class="col-start-1 col-span-2">
                    <h1 class="font-bold text-1xl my-5">Student's Form</h1>

                    <!-- full name -->
                    <div class="full-name grid grid-cols-2 gap-2">
                      <div class="">
                        <label class="text-xs" for="">First Name</label>
                        <br />
                        <input name="first_name" type="text" placeholder="John" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                        <span style="color:red; font-size:smaller;"> @error('first_name') {{ $message }} @enderror </span>
                      </div>
                      <div class="">
                        <label class="text-xs" for="">Last Name</label> <br />
                        <input name="last_name" type="text" placeholder="Doe" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                        <span style="color:red; font-size:smaller;"> @error('last_name') {{ $message }} @enderror </span>
                      </div>
                    </div>

                    <!-- email -->
                    <!-- <div class="mt-3">
                      <label class="text-xs" for="">Email</label> <br />
                      <input type="email" placeholder="123@example.com" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                    </div> -->

                    <!-- password -->
                    <!-- <div class="mt-3">
                      <label class="text-xs" for="">Password</label> <br />
                      <input type="password" placeholder="************" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                    </div> -->

                    <!-- phone number -->
                    <div class="mt-3">
                      <label class="text-xs" for="">Phone Number</label>
                      <br />
                      <input name="phone_number" type="number" placeholder="123-345-567" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                      <span style="color:red; font-size:smaller;"> @error('phone_number') {{ $message }} @enderror </span>
                    </div>

                    <!-- address -->
                    <div class="mt-3">
                      <label class="text-xs" for="">Address</label> <br />
                      <textarea name="address" id="" cols="30" rows="10" placeholder="Add Address here..." class="resize-none font-bold w-full p-3 mt-2 text-xs pl-3 rounded-lg bg-zinc-50 border border-zinc-200 outline-none"></textarea>
                      <span style="color:red; font-size:smaller;"> @error('address') {{ $message }} @enderror </span>
                    </div>

                    <!-- course -->
                    <div class="mt-3">
                      <label class="text-xs" for="">Course</label> <br />
                      <input name="course" type="" placeholder="123@example.com" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                      <span style="color:red; font-size:smaller;"> @error('course') {{ $message }} @enderror </span>
                    </div>
                  </div>



                  <!-- guardian's form -->

                  <div class="col-start-3 col-span-2 px-3">
                    <h1 class="font-bold text-1xl my-5">Guardian's Form</h1>

                    <!-- full name -->
                    <div class="full-name grid grid-cols-2 gap-2">
                      <div class="">
                        <label class="text-xs" for="">First Name</label>
                        <br />
                        <input name="g_first_name" type="text" placeholder="John" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                        <span style="color:red; font-size:smaller;"> @error('g_first_name') {{ $message }} @enderror </span>
                      </div>
                      <div class="">
                        <label class="text-xs" for="">Last Name</label> <br />
                        <input name="g_last_name" type="text" placeholder="Doe" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                        <span style="color:red; font-size:smaller;"> @error('g_last_name') {{ $message }} @enderror </span>
                      </div>
                    </div>

                    <!-- email -->
                    <div class="mt-3">
                      <label class="text-xs" for="">Email</label> <br />
                      <input name="g_email" type="email" placeholder="123@example.com" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                      <span style="color:red; font-size:smaller;"> @error('g_email') {{ $message }} @enderror </span>
                    </div>

                    <!-- phone number -->
                    <div class="mt-3">
                      <label class="text-xs" for="">Phone Number</label>
                      <br />
                      <input name="g_phone_number" type="number" placeholder="123-345-567" class="font-bold w-full p-3 mt-2 text-xs pl-3 rounded-full bg-zinc-50 border border-zinc-200 outline-none" />
                      <span style="color:red; font-size:smaller;"> @error('g_phone_number') {{ $message }} @enderror </span>
                    </div>

                    <!-- address -->
                    <div class="mt-3">
                      <label class="text-xs" for="">Address</label> <br />
                      <textarea name="g_address" id="" cols="30" rows="10" placeholder="Add Address here..." class="resize-none font-bold w-full p-3 mt-2 text-xs pl-3 rounded-lg bg-zinc-50 border border-zinc-200 outline-none"></textarea>
                      <span style="color:red; font-size:smaller;"> @error('g_address') {{ $message }} @enderror </span>
                    </div>
                    <!-- submit button -->
                    <div class="mt-5">
                      <button class="btn text-white font-semibold px-36 rounded-full">Submit</button>
                    </div>


                  </div>
                </div>
              </form>
            </div>

            <!-- col 2 -->
            <div class="m-auto col-start-5 col-span-2">
              <!-- illustration here -->
              <img src="../images/dashboard-illustration.svg" alt="dashboard illustration" class="w-full" />
              <p class="text-sm italic text-gray-500 text-center mt-5">Your application is being reviewed</p>

            </div>

          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>