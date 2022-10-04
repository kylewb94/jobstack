<x-layout>

	<x-search />

	<div class="space-y-4">

		@unless(count($listings) == 0)

			@foreach ($listings as $listing)
				<x-listing-card :listing="$listing" />
			@endforeach

			@else
			<p>No jobs found</p>

		@endunless

	</div>

	<div class="mt-6 p-4 font-mono">
		{{$listings->links()}}
	</div>	

</x-layout>