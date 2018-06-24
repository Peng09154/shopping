<div id="content2">

	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
	<input type="hidden" name="product_id" value="{{$product->id}}"/>

	<div id="content3">
		{{Form::label('name','訂購人')}}
		{{Form::text('name')}}
	</div>

	<div id="content3">
		{{Form::label('phone','手機')}}
		{{Form::text('phone')}}
	</div>

	<div id="content3">
		{{Form::label('email','電子郵件')}}
		{{Form::text('email')}}
	</div>

	<div id="content3">
		{{Form::label('address','地址')}}
		{{Form::text('address')}}
	</div>

	<div id="content3">
		{{Form::label('pic','圖片')}}
		<img src="{{$product->pic}}">
	</div>

	<div id="content3">
		{{Form::label('product','商品')}}
		{{$product->title}}
	</div>

	<div id="content3">
		{{Form::label('quantity','數量')}}
		{{Form::text('quantity')}}
	</div>

	<div id="content3">
		{{Form::label('price','價格')}}
		{{$product->price}}
	</div>
				
	<div id="content3">
		{{Form::submit('購買',['class'=>'btn btn-primary'])}}
	</div>

	{{Form::close()}}

</div>