<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="//unpkg.com/alpinejs" defer></script>
		<script src="https://cdn.tailwindcss.com"></script>
		{{-- Prevent Nav flickering --}}
		<style>
			[x-cloak] {
				display: none;
			}
		</style>
		<title>JobStack | Web Developer Jobs</title>
	</head>

	<body>

			<div class="md:max-w-none lg:max-w-2xl mx-auto px-4 md-px-0">

				{{-- NAV --}}
				@include('partials._nav')

				<main>
					{{$slot}}
				</main>

				{{-- FOOTER --}}
				<footer class="mt-16 mb-4 font-mono text-center">
					<p>&copy; {{ date('Y') }} | Created by Kyle Barnes</p>
				</footer>

				{{-- CREATE FORM MSG --}}
				<x-flash-msg />

			</div>

	</body>

</html>