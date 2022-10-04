<x-layout>

	<x-search />

	<x-back />

	<x-card class="p-10">
		{{-- Job title --}}
		<h1 class="text-2xl font-bold mb-4">
			<x-listing-title :titlesCsv="$listing->titles" />
		</h1>
		{{-- Company --}}
		<p class="mb-2 text-lg">
			<a href="{{$listing->website}}" target="_blank" class="underline">
				{{$listing->company}}
			</a>
	</p>
		{{-- Job location --}}
		<p class="text-md mb-6">
			<i class="fa-solid fa-location-dot"></i> {{$listing->location}}
		</p>
		{{-- Job tags --}}
		<x-listing-tags :tagsCsv="$listing->tags" />
		{{-- Divider --}}
		<div class="w-full my-6 border border-black"></div>
		{{-- Job description --}}
		<h2 class="mb-4 text-xl font-bold">
			Description
		</h2>
		<p class="text-lg mb-12">
			{{$listing->description}}
		</p>
		{{-- Links --}}
		<a href="mailto:{{$listing->email}}" class="px-3 py-2 bg-black border border-black text-white hover:bg-white hover:text-black">
			<i class="fa-solid fa-envelope"></i> Apply <span class="font-mono">(mailto:)</span>
		</a>
	</x-card>

</x-layout>