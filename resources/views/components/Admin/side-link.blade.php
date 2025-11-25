@props(['href' => '#', 'label' => '', 'active' => false])

<a
  href="{{ $href }}"
  class="flex items-center p-2 text-base font-medium rounded-lg group
    {{ $active ? 'text-blue-600 bg-gray-100 dark:bg-gray-700 dark:text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}"
>
  <div class="w-6 h-6 mr-3">
    {{ $slot }}
  </div>
  <span>{{ $label }}</span>
</a>