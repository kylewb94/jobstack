{{-- Comma separated value list --}}
@props(['tagsCsv'])

@php
	$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex font-mono">
	@foreach($tags as $tag)
	<li class="flex items-center justify-center py-1 px-3 mr-2 border border-black text-xs text-black rounded-xl hover:bg-black hover:text-white">
		<a href="/?tag={{$tag}}">{{$tag}}</a>
	</li>
	@endforeach
</ul>