{{-- Comma separated value list --}}
@props(['titlesCsv'])

@php
	$titles = explode(',', $titlesCsv);
@endphp

@foreach($titles as $title)
	{{$title}}
@endforeach