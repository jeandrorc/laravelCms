@if (!emptyArray($scripts))
	@forelse ($scripts as $element)
		<script>
			{!! $element->valor !!}
		</script>
	@empty
		
	@endforelse
@endif