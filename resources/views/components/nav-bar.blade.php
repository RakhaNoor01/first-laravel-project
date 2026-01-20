<div class="w-full">
  <nav class="bg-gray-800 w-full">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between flex-wrap">
        
        <!-- Logo + Menu Desktop -->
        <div class="flex items-center flex-shrink-0">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" 
               alt="Your Company" class="h-8 w-8" />
        </div>

        <!-- Desktop Nav Links -->
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>
            <x-nav-link href="/kontak" :active="request()->is('kontak')">Kontak</x-nav-link>
            <x-nav-link href="/profil" :active="request()->is('profil')">Profile</x-nav-link>
            <x-nav-link href="/admin/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
          </div>
        </div>

        <!-- Right Section (Notifications + Profile) -->
        <div class="hidden md:flex items-center space-x-4">
          <button type="button" 
                  class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" 
                    stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>

          <!-- Profile Dropdown -->
          <el-dropdown class="relative">
            <button class="flex items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
              <img src="https://cdn0-production-images-kly.akamaized.net/sbugx3t32cTC7EKu_flyZjXgONc=/1200x1200/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/6444/original/deddy-corbuzier-131024b.jpg" 
                   alt="profile" class="h-8 w-8 rounded-full" />
            </button>
            <el-menu anchor="bottom end" popover class="w-48 bg-white shadow-lg rounded-md py-1">
              <a href="/profil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
            </el-menu>
          </el-dropdown>
        </div>

        <!-- Mobile Menu Button -->
        <div class="flex md:hidden">
          <button type="button" command="--toggle" commandfor="mobile-menu" 
                  class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <el-disclosure id="mobile-menu" hidden class="md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <a href="/home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
        <a href="/kontak" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
        <a href="/profil" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Profile</a>
      </div>
      <div class="border-t border-white/10 pt-4 pb-3">
        <div class="flex items-center px-5">
          <img src="https://cnc-magazine.oramiland.com/parenting/images/biodata-deddy-corbuzier.width-800.format-webp.webp" 
               alt="profile" class="h-10 w-10 rounded-full" />
          <div class="ml-3">
            <div class="text-base font-medium text-white">Tom Cruise</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="/profil" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign out</a>
        </div>
      </div>
    </el-disclosure>
  </nav>
</div>
