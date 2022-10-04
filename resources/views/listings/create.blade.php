<x-layout>

	<x-back />

	<x-card class="p-10">
		<header class="text-center">
			<h2 class="text-2xl font-bold uppercase mb-1">
				Create a Job
			</h2>
			<p class="mb-4 font-mono">Post a job to find a developer</p>
		</header>

		<form method="POST" action="/listings" enctype="multipart/form-data">
			{{-- Cross Site Request Forgery --}}
			{{-- Prevent cross-site scripting tags --}}
			@csrf
			<div class="mb-6">
				<label for="company" class="inline-block text-lg mb-2">Company Name *</label>
				<input type="text" class="border border-black p-2 w-full" name="company" value="{{old('company')}}" />

				@error('company')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="title" class="inline-block text-lg mb-2">Job Title *</label>
				<input type="text" class="border border-black p-2 w-full" name="titles" placeholder="Full Stack Web Developer" value="{{old('titles')}}" />

				@error('title')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="location" class="inline-block text-lg mb-2">Job Location *</label>
				<input type="text" class="border border-black p-2 w-full" name="location" placeholder="Portland OR, Remote, Hybrid-Remote" value="{{old('location')}}" />

				@error('location')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="email" class="inline-block text-lg mb-2">Contact Email *</label>
				<input type="text" class="border border-black p-2 w-full" name="email" value="{{old('email')}}" />

				@error('email')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="website" class="inline-block text-lg mb-2">
					Website/Application URL
				</label>
				<input type="text" class="border border-black p-2 w-full" name="website" value="{{old('website')}}" />

				@error('website')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="tags" class="inline-block text-lg mb-2">
					Tags (Comma Separated) *
				</label>
				<input type="text" class="border border-black p-2 w-full" name="tags" placeholder="Laravel, Backend, Postgres" value="{{old('tags')}}" />

				@error('tags')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="description" class="inline-block text-lg mb-2">
					Job Description *
				</label>
				<textarea class="border border-black p-2 w-full" name="description" rows="10" placeholder="Summary, qualifications, benefits, etc">{{old('description')}}</textarea>

				@error('description')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<button class="py-2 px-4 font-mono bg-black text-white border hover:bg-white hover:text-black hover:border-black">
					Create Job
				</button>
			</div>
		</form>
	</x-card>
	
</x-layout>