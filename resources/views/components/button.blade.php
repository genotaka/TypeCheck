<button {{ $attributes->merge(['type' => 'submit', 'class' => 'relative group overflow-hidden px-8 h-12 rounded-full flex space-x-2 items-center border-2 border-gray-400']) }}>
    <span class="relative text-gray-600 tracking-widest">{{ $slot }}</span>
    <div class="flex items-center -space-x-3 translate-x-3">
        <div class="w-2.5 h-[1.6px] rounded bg-pink-400 origin-left scale-x-0 transition duration-300 group-hover:scale-x-100"></div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-pink-300 -translate-x-2 transition duration-300 group-hover:translate-x-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    </div>
</button>
