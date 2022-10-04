@props(['listing'])

<x-card>
	<div class="flex font-sans">
		<div>
			<h2 class="text-2xl font-bold">
				<a href="/listings/{{$listing->id}}">
					<x-listing-title :titlesCsv="$listing->titles" />
				</a>
			</h2>
			<p class="mb-4 text-lg">{{$listing->company}}</p>

			<x-listing-tags :tagsCsv="$listing->tags" />
				
			<div class="mt-4 text-md">
				<i class="fa-solid fa-location-dot"></i> {{$listing->location}}
			</div>
		</div>
	</div>
</x-card>