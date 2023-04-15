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
                @if ($data->application_status == "pending")
                Your application is undergoing the screening and assessment
                process. Please be patient with us, as your results will be
                available soon.
                @endif

                @if ($data->application_status == "approved")
                Your application has been approved and you are officialy a student on stack ATS
                @endif

                @if ($data->application_status == "declined")
                Sorry, your application was declined for one reason or the other, please contact our email for more..
                @endif
              </p>

              <!-- grey badge here -->
              <div class="status badge my-auto text-center">



                @if ($data->application_status == "pending")
                <div class="badge bg-gray-100 text-gray-500 px-14 py-3 font-semibold rounded-full w-full text-1xl">
                  {{ $data->application_status }}
                </div>
                @endif

                @if ($data->application_status == "approved")
                <div class="badge bg-green-50 text-green-500 px-14 py-3 font-semibold rounded-full w-full text-1xl">
                  {{ $data->application_status }}
                </div>
                @endif

                @if ($data->application_status == "declined")
                <div class="badge bg-red-50 text-red-500 px-14 py-3 font-semibold rounded-full w-full text-1xl">
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
          <p class="w-6/12 text-sm text-green-400 mt-2 my-auto">
            Your application was successfully submitted.
          </p>

          <hr class="opacity-60 my-5" />

          <div class="grid grid-cols-6">
            <!-- col 1 -->
            <div class="col-start-1 col-span-4">
              <!-- student form -->

              <div class="grid grid-cols-4">
                <div class="col-start-1 col-span-2">
                  <h1 class="font-bold text-1xl my-5">Student's Info</h1>

                  <!-- full name -->
                  <div class="full-name grid grid-cols-2">

                    <div class="">
                      <label class="text-xs" for="">Full Name</label> <br />
                      <small class="font-bold text-gray-500 text-xs">{{ $data->fullname }}</small>
                    </div>

                    <!-- <div class="">
                      <label class="text-xs" for="">Last Name</label> <br />
                      <small class="font-bold text-gray-500 text-xs">Doe</small>
                    </div> -->
                  </div>

                  <!-- email -->
                  <div class="mt-3">
                    <label class="text-xs" for="">Email</label> <br />
                    <small class="font-bold text-gray-500 text-xs">{{ $data->user_email }}</small>
                  </div>

                  <!-- password -->
                  <div class="mt-3">
                    <label class="text-xs" for="">Password</label> <br />
                    <small class="font-bold text-gray-500 text-xs">********</small>
                  </div>

                  <!-- phone number -->
                  <div class="mt-3">
                    <label class="text-xs" for="">Phone Number</label>
                    <br />
                    <small class="font-bold text-gray-500 text-xs">{{ $data->phone_number }}</small>
                  </div>

                  <!-- address -->
                  <div class="mt-3">
                    <label class="text-xs" for="">Address</label> <br />
                    <small class="font-bold text-gray-500 text-xs">{{ $data->address }}</small>
                  </div>

                  <!-- course -->
                  <div class="mt-3">
                    <label class="text-xs" for="">Course</label> <br />
                    <small class="font-bold text-gray-500 text-xs">{{ $data->course }}</small>
                  </div>
                </div>



                <!-- guardin's form -->

                <div class="col-start-3 col-span-2 px-3">
                  <h1 class="font-bold text-1xl my-5">Guardian's Info</h1>


                  <!-- full name -->
                  <div class="full-name grid grid-cols-2">
                    <div class="">
                      <label class="text-xs" for="">Full Name</label> <br>
                      <small class="font-bold text-gray-500 text-xs">{{ $data->g_name }}</small>
                    </div>
                    <!-- <div class="">
                      <label class="text-xs" for="">Last Name</label> <br />
                      <small class="font-bold text-gray-500 text-xs">Doe</small>
                    </div> -->
                  </div>

                  <!-- email -->
                  <div class="mt-3">
                    <label class="text-xs" for="">Email</label> <br />
                    <small class="font-bold text-gray-500 text-xs">{{ $data->g_email }}</small>
                  </div>

                  <!-- phone number -->
                  <div class="mt-3">
                    <label class="text-xs" for="">Phone Number</label>
                    <br />
                    <small class="font-bold text-gray-500 text-xs">{{ $data->g_phone }}</small>
                  </div>

                  <!-- address -->
                  <div class="mt-3">
                    <label class="text-xs" for="">Address</label> <br />
                    <small class="font-bold text-gray-500 text-xs">{{ $data->g_address }}</small>
                  </div>

                </div>
              </div>
            </div>

            <!-- col 2 -->
            <div class="m-auto col-start-5 col-span-2">
              <!-- illustration here -->
              <img src="../images/dashboard-illustration.svg" alt="dashboard illustration" class="w-full" />
              <p class="text-sm italic text-gray-500 text-center mt-5">
                @if ($data->application_status == 'pending')
                Your application is being reviewed
                @endif
              </p>

            </div>

          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>