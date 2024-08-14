  <div class="flex items-center justify-center">
      <div class="h-12 rounded-[20px] w-full max-w-sm border border-red-500 bg-red-100 flex items-center px-4">
          <svg class="w-6 h-6 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
          <span class="text-red-700">{{ $message ?? 'Error!' }}</span>
      </div>
  </div>
