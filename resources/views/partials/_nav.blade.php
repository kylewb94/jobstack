<nav x-data="{ open: false }" class="flex justify-between md:max-w-2xl lg:max-w-4xl mx-auto mb-16 py-4 lg:py-8 font-mono text-2xl">
	<div class="flex items-center">
		<a href="/" class="hover:underline">
			<span class="font-black">Job</span>Stack
		</a>
	</div>
	<div class="flex items-center justify-between text-lg">
		{{-- >lg: Hamburger Menu --}}
		<button x-on:click="open = !open" type="submit">
			<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black lg:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
			</svg>
		</button>

		{{-- >lg: Nav Links --}}
		<ul class="hidden space-x-6 lg:flex">
			@include('partials._links')
		</ul>

		{{-- <md: Nav Links --}}
		<div class="mobile-navbar">
			<div class="fixed top-16 right-0 p-5 bg-white border border-black text-right z-50" x-show="open" x-on:click.outside="open = false" x-cloak>
				<ul class="flex flex-col space-y-6 text-left">
					@include('partials._links')
				</ul>
			</div>
		</div>
	</div>
</nav>