<x-layout>

		<x-back />

		<x-card class="my-8">
			@auth
				<h1 class="font-mono text-lg font-bold">
					<i class="fa-solid fa-user"></i> {{auth()->user()->name}}
				</h1>
				<p class="font-mono text-lg">
					<i class="fa-solid fa-envelope"></i> {{auth()->user()->email}}
				</p>
			@else
			@endauth
		</x-card>

		<x-card class="mb-16 p-0 border-0">
			<header class="mb-8">
				<h1 class="text-3xl text-center font-bold my-6 uppercase">
					Manage Listings
				</h1>
			</header>

			<table class="w-full table-auto">
				<tbody>

					@unless($listings->isEmpty())
					@foreach($listings as $listing)

						<tr class="border-black">
							<td class="border-t border-b border-black">
								<a href="/listings/{{$listing->id}}">
									<x-listing-title :titlesCsv="$listing->titles" />
								</a>
							</td>
							<td class="border-t border-b border-black">
								<a href="/listings/{{$listing->id}}/edit" class="text-blue-500 hover:text-blue-600 px-6 py-2">
									<i class="fa-solid fa-pen-to-square"></i> Edit
								</a>
							</td>
							<td class="border-t border-b border-black">
								<form method="POST" action="/listings/{{$listing->id}}">
									@csrf
									@method('DELETE')
									<button class="text-red-500 hover:text-red-600">
										<i class="fa-solid fa-trash-can"></i> Delete
									</button>
								</form>
							</td>
						</tr>

					@endforeach
					@else

						<tr class="border-black">
							<td class="px-4 py-8 border-t border-b border-black text-lg text-center">
								<a href="/listings/create" class="underline">Create a listing</a>
							</td>
						</tr>

					@endunless

				</tbody>
			</table>
		</x-card>

</x-layout>