<div>
  <aside
    id="drawer-navigation"
    aria-label="Sidenav"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform
    -translate-x-full bg-white border-r border-gray-200 md:translate-x-0
    dark:bg-gray-800 dark:border-gray-700"
  >
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
      <ul class="space-y-2">

        {{-- Dashboard --}}
        <li>
          <x-admin.side-link href="/admin/dashboard" label="Dashboard" :active="request()->is('admin/dashboard*')">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Students --}}
        <li>
          <x-admin.side-link href="/admin/student" label="Students" :active="request()->is('admin/student*')">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Guardians --}}
        <li>
          <x-admin.side-link href="/admin/guardian" label="Guardians" :active="request()->is('admin/guardian*')">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Classrooms --}}
        <li>
          <x-admin.side-link href="/admin/classroom" label="Classrooms" :active="request()->is('admin/classroom*')">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Teachers --}}
        <li>
          <x-admin.side-link href="/admin/teacher" label="Teachers" :active="request()->is('admin/teacher*')">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Subjects --}}
        <li>
          <x-admin.side-link href="/admin/subject" label="Subjects" :active="request()->is('admin/subject*')">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
            </svg>
          </x-admin.side-link>
        </li>

      </ul>
    </div>
  </aside>
</div>