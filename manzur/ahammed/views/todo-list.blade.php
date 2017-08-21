<h1>Hello</h1>
<ul>
	@foreach($todo as $value)
		<li>{!!$value->name!!}</li>
	@endforeach
</ul>