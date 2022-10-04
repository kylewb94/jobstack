{{-- Logged-in links --}}
@auth
	<li>
		<a href="/listings/manage" class="hover:underline"><i class="fa-solid fa-gear"></i> Manage Listings</a>
	</li>
	<li>
		<form method="POST" action="/logout" class="inline">
			@csrf
			<button type="submit" class="hover:underline">
				<i class="fa-solid fa-door-closed"></i> Logout
			</button>
		</form>
	</li>
	<li>
		<a href="/listings/create" class="border border-black text-black hover:bg-black hover:text-white py-2 px-3">Post a job</a>
	</li>
{{-- Logged-out links --}}
@else
	<li>
		<a href="/register" class="hover:underline"><i class="fa-solid fa-user-plus"></i> Register</a>
	</li>
	<li>
		<a href="/login" class="hover:underline"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
	</li>
	<li>
		<a href="/listings/create" class="border border-black text-black hover:bg-black hover:text-white py-2 px-3">Post a job</a>
	</li>
@endauth