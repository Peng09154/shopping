<div id="content2">

	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>

	<div id="content3">
		{{Form::label('title','名稱')}}
		{{Form::text('title')}}
	</div>

	<div id="content3">
		{{Form::label('sort','排序')}}
		{{Form::text('sort')}}
	</div>

	<div id="content3">
		{{Form::label('cgy_id','類別')}}
		{{Form::text('cgy_id')}}
	</div>

	<div id="content3">
		{{Form::label('pic','圖片')}}
		{{Form::file('picUpload[]')}}
	</div>
			
	<div id="content3">
		{{Form::label('price','價格')}}
		{{Form::text('price')}}
	</div>

	<div id="content3">
		{{Form::label('stock','庫存')}}
		{{Form::text('stock')}}
	</div>
		
	<div id="content3">
		{{Form::submit('修改',['class'=>'btn btn-primary'])}}
	</div>

	{{Form::close()}}

</div>