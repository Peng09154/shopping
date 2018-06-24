<div id="content2">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>

	<div id="content3">
		{{Form::label('title','類別')}}
		{{Form::text('title')}}
	</div>

	<div id="content3">
		{{Form::label('sort','排序')}}
		{{Form::text('sort')}}
	</div>

	<div id="content3">
		{{Form::label('pic','圖片')}}
		{{Form::file('picUpload[]')}}
	</div>
				
	<div id="content3">
	{{Form::submit('新增',['class'=>'btn btn-primary'])}}
	</div>

	{{Form::close()}}

</div>