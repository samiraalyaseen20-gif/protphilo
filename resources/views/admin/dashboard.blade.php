<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | إدارة المشاريع - سميرة علي</title>
    
    <!-- Cairo Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ✅ Flowbite CSS (مكتبة جاهزة) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        body { font-family: 'Cairo', sans-serif; }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900">

<!-- ✅ Flowbite Navbar -->
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <!-- ✅ Flowbite Sidebar Toggle Button -->
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
          <span class="sr-only">القائمة الجانبية</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
          </svg>
        </button>
        <a href="/" class="flex ms-2 md:me-24 gap-2 items-center">
          <svg class="h-8 w-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
          </svg>
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">لوحة الإدارة</span>
        </a>
      </div>

      <!-- User Menu -->
      <div class="flex items-center">
        <div class="flex items-center ms-3">
          <!-- ✅ Flowbite Dropdown User -->
          <div>
            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown-user">
              <span class="sr-only">فتح قائمة المستخدم</span>
              <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm">سم</div>
            </button>
          </div>
          <!-- ✅ Flowbite Dropdown -->
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
            <div class="px-4 py-3" role="none">
              <p class="text-sm text-gray-900 dark:text-white text-right">م. سميرة علي</p>
              <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300 text-right">admin@admin.com</p>
            </div>
            <ul class="py-1" role="none">
              <li>
                <a href="/" target="_blank" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white text-right">عرض الموقع</a>
              </li>
              <li>
                <form action="{{ route('admin.logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="w-full text-right block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                    تسجيل خروج
                  </button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- ✅ Flowbite Sidebar -->
<aside id="logo-sidebar" class="fixed top-0 right-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-l border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <!-- Dashboard Item -->
         <li>
            <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white bg-gray-100 dark:bg-gray-700 group gap-3">
               <svg class="w-5 h-5 text-blue-600 transition duration-75 dark:text-gray-400 group-hover:text-blue-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 00-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 00-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0011 1.02V10h8.975a1 1 0 001-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0012.5 0Z"/>
               </svg>
               <span>لوحة التحكم</span>
            </a>
         </li>
         <!-- Site Link -->
         <li>
            <a href="/" target="_blank" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group gap-3">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-blue-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z"/>
                  <path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v13.666A2.169 2.169 0 0 0 2.167 20h13.666A2.169 2.169 0 0 0 18 17.833v-6.244a3.007 3.007 0 0 1-3.742-3.604Z"/>
               </svg>
               <span>معاينة الموقع</span>
            </a>
         </li>
      </ul>

      <!-- Bottom Logout -->
      <div class="absolute bottom-4 left-0 right-0 px-3">
        <form action="{{ route('admin.logout') }}" method="POST">
          @csrf
          <button type="submit" class="flex items-center gap-3 w-full p-2 text-red-600 rounded-lg hover:bg-red-50 dark:hover:bg-gray-700 group font-medium text-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
            </svg>
            تسجيل الخروج
          </button>
        </form>
      </div>
   </div>
</aside>

<!-- Main Content -->
<div class="p-4 sm:mr-64 mt-14">
  <div class="p-4 rounded-lg dark:border-gray-700 space-y-6">

    <!-- Page Header -->
    <div class="flex items-center justify-between">
      <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">معرض المشاريع</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">إدارة وعرض وتعديل المشاريع البرمجية على الصفحة الرئيسية</p>
      </div>
      <!-- ✅ Flowbite Button trigger for modal -->
      <button data-modal-target="add-project-modal" data-modal-toggle="add-project-modal"
        class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 gap-2">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
        </svg>
        إضافة مشروع
      </button>
    </div>

    <!-- ✅ Flowbite Alert Success -->
    @if (session('success'))
      <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg class="shrink-0 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
        </svg>
        <span class="sr-only">تنبيه</span>
        <div class="ms-3 text-sm font-medium">{{ session('success') }}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
          <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
      </div>
    @endif

    @if ($errors->any())
      <div class="flex items-start p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
        <svg class="shrink-0 w-4 h-4 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
        </svg>
        <div class="ms-3 text-sm font-medium text-right space-y-1">
          @foreach ($errors->all() as $error)
            <div>• {{ $error }}</div>
          @endforeach
        </div>
      </div>
    @endif

    <!-- ✅ Flowbite Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <!-- Card 1 -->
      <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
        <div class="flex justify-between">
          <div>
            <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">{{ $projects->count() }}</h5>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">إجمالي المشاريع</p>
          </div>
          <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
            <svg class="w-5 h-5 me-1" fill="none" viewBox="0 0 10 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/></svg>
            نشط
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
        <div class="flex justify-between">
          <div>
            <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">{{ $projects->pluck('category')->unique()->count() }}</h5>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">التصنيفات</p>
          </div>
          <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/>
          </svg>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
        <div class="flex justify-between">
          <div>
            <h5 class="leading-none text-3xl font-bold text-green-500 dark:text-white pb-2">متصل</h5>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">حالة النظام</p>
          </div>
          <span class="flex w-4 h-4 bg-green-400 rounded-full animate-pulse mt-1"></span>
        </div>
      </div>
    </div>

    <!-- ✅ Flowbite Table -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">الصورة</th>
                    <th scope="col" class="px-6 py-3">عنوان المشروع</th>
                    <th scope="col" class="px-6 py-3">التصنيف</th>
                    <th scope="col" class="px-6 py-3">السنة</th>
                    <th scope="col" class="px-6 py-3 text-center">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @if ($projects->isEmpty())
                  <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-400">
                      <p class="text-lg font-medium">لا توجد مشاريع</p>
                      <p class="text-sm">انقر على "إضافة مشروع" لبدء إضافة المشاريع</p>
                    </td>
                  </tr>
                @else
                  @foreach ($projects as $project)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            <img class="w-16 h-12 rounded object-cover" src="{{ asset($project->image) }}" alt="{{ $project->title }}">
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div>{{ $project->title }}</div>
                            <div class="text-xs text-gray-400 font-normal mt-1 max-w-xs truncate">{{ $project->description }}</div>
                        </th>
                        <td class="px-6 py-4">
                            <!-- ✅ Flowbite Badge -->
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">{{ $project->category }}</span>
                        </td>
                        <td class="px-6 py-4">{{ $project->year }}</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <!-- ✅ Flowbite Edit Button (triggers modal) -->
                                <button 
                                    onclick="openEditModal(this)"
                                    data-id="{{ $project->id }}"
                                    data-title="{{ $project->title }}"
                                    data-category="{{ $project->category }}"
                                    data-year="{{ $project->year }}"
                                    data-description="{{ $project->description }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    تعديل
                                </button>

                                <!-- ✅ Flowbite Delete Form -->
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                        حذف
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                  @endforeach
                @endif
            </tbody>
        </table>
    </div>

  </div>
</div>

<!-- ✅ Flowbite Modal: Add/Edit Project -->
<div id="add-project-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 id="modal-title" class="text-xl font-semibold text-gray-900 dark:text-white">
                    إضافة مشروع جديد
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-project-modal">
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">إغلاق</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form id="project-form" action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 text-right">
                    @csrf
                    <div id="method-override"></div>

                    <!-- Title -->
                    <div>
                        <label for="form_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">عنوان المشروع</label>
                        <input type="text" id="form_title" name="title" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="مثال: برنامج الإحصاء الطبي">
                    </div>

                    <!-- Category & Year Row -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="form_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">التصنيف</label>
                            <input type="text" id="form_category" name="category" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="أنظمة إحصائية طبية">
                        </div>
                        <div>
                            <label for="form_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">سنة الإنجاز</label>
                            <input type="text" id="form_year" name="year" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="مثال: ٢٠٢٥ م">
                        </div>
                    </div>

                    <!-- Image -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="form_image">صورة المشروع</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 p-2.5" id="form_image" name="image" type="file" accept="image/*">
                        <p id="image-note" class="hidden mt-1 text-xs text-gray-500 dark:text-gray-300">اتركه فارغاً للاحتفاظ بالصورة الحالية.</p>
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="form_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تفاصيل المشروع</label>
                        <textarea id="form_description" name="description" rows="4" required
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="اكتب وصف المشروع..."></textarea>
                    </div>

                    <!-- Modal footer buttons -->
                    <div class="flex items-center pt-4 border-t border-gray-200 dark:border-gray-600 gap-3 justify-end">
                        <button data-modal-hide="add-project-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">إلغاء</button>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">حفظ المشروع</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Flowbite JS (JavaScript الجاهز للـ Modals والـ Dropdowns والـ Sidebar) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<script>
    const form = document.getElementById('project-form');
    const modalTitle = document.getElementById('modal-title');
    const methodOverride = document.getElementById('method-override');
    const imageNote = document.getElementById('image-note');
    const imageInput = document.getElementById('form_image');

    function openEditModal(button) {
        const id = button.getAttribute('data-id');
        const title = button.getAttribute('data-title');
        const category = button.getAttribute('data-category');
        const year = button.getAttribute('data-year');
        const description = button.getAttribute('data-description');

        form.action = `/admin/projects/${id}/update`;
        methodOverride.innerHTML = '';
        
        document.getElementById('form_title').value = title;
        document.getElementById('form_category').value = category;
        document.getElementById('form_year').value = year;
        document.getElementById('form_description').value = description;
        imageInput.value = '';
        imageInput.required = false;
        modalTitle.innerText = 'تعديل المشروع';
        imageNote.classList.remove('hidden');

        // Open Flowbite modal
        const modal = document.getElementById('add-project-modal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    // Reset form when modal is opened via "Add" button
    document.querySelector('[data-modal-target="add-project-modal"]').addEventListener('click', function() {
        form.action = "{{ route('admin.projects.store') }}";
        methodOverride.innerHTML = '';
        form.reset();
        imageInput.required = true;
        modalTitle.innerText = 'إضافة مشروع جديد';
        imageNote.classList.add('hidden');
    });
</script>

</body>
</html>
