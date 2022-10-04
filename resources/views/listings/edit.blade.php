<x-layout>

	<x-back />

	<x-card class="p-10">
		<header class="text-center">
			<h2 class="text-2xl font-bold uppercase mb-4">
				Edit Listing
			</h2>
		</header>

		<form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
			{{-- Cross Site Request Forgery --}}
			{{-- Prevent cross-site scripting tags --}}
			@csrf
			@method('PUT')
			<div class="mb-6">
				<label for="company" class="inline-block text-lg mb-2">Company Name</label>
				<input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" value="{{$listing->company}}" />

				@error('company')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="title" class="inline-block text-lg mb-2">Job Title</label>
				<input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{$listing->title}}" />

				@error('title')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="location" class="inline-block text-lg mb-2">Job Location</label>
				<input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" value="{{$listing->location}}" />

				@error('location')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="email" class="inline-block text-lg mb-2">Contact Email</label>
				<input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$listing->email}}" />

				@error('email')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="website" class="inline-block text-lg mb-2">
					Website/Application URL
				</label>
				<input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{$listing->website}}" />

				@error('website')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="tags" class="inline-block text-lg mb-2">
					Tags (Comma Separated)
				</label>
				<input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" value="{{$listing->tags}}" />

				@error('tags')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="description" class="inline-block text-lg mb-2">
					Job Description
				</label>
				<textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>

				@error('description')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<button class="bg-black text-white hover:bg-white hover:text-black hover:border hover:border-black">
					Update
				</button>

				<a href="/" class="text-black ml-4"> Back </a>
			</div>
		</form>
	</x-card>
	
</x-layout>