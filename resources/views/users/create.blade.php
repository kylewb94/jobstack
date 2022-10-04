<x-layout>

	<x-back />

	<x-card class="p-10">
		<header class="text-center">
			<h2 class="text-2xl font-bold uppercase mb-1">
				Register
			</h2>
			<p class="mb-4">Create an account to post a listing</p>
		</header>

		<form method="POST" action="/users">
			{{-- Cross Site Request Forgery --}}
			{{-- Prevent cross-site scripting tags --}}
			@csrf
			
			<div class="mb-6">
				<label for="name" class="inline-block text-lg mb-2">
					Name
				</label>
				<input type="text" class="border border-black p-2 w-full" name="name" value="{{old('name')}}" />

				@error('name')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="email" class="inline-block text-lg mb-2">Email</label>
				<input type="email" class="border border-black p-2 w-full" name="email" value="{{old('email')}}" />

				@error('email')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="password" class="inline-block text-lg mb-2">
					Password
				</label>
				<input type="password" class="border border-black p-2 w-full" name="password" />

				@error('password')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="password_confirmation" class="inline-block text-lg mb-2">
					Confirm Password
				</label>
				<input type="password" class="border border-black p-2 w-full" name="password_confirmation" />

				@error('password_confirmation')
					<p class="text-red-500 text-xs mt-1">{{$message}}</p>
				@enderror
			</div>

			<div class="mb-6">
				<button type="submit" class="py-2 px-4 bg-black text-white border hover:bg-white hover:text-black hover:border-black">
					Sign Up
				</button>
			</div>

			<div class="mt-8">
				<p>
					Already have an account?
					<a href="/login" class="underline">Login</a>
				</p>
			</div>
		</form>
	</x-card>
	
</x-layout>