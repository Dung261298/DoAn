@extends('admin.layout.main')
@section('title') Trang chủ
@endsection
@section('content')
<div class="col-7 m-auto">
	<div class="card">
		<div class="card-header text-center font-weight-bold">
			Sửa Thông Tin
		</div>
		<div class="card-body">
			
	{{Form::open(['route'=>['about.update',$about->id],'method'=>'put'])}}
	<div class="row ">
		
		<div class="form-group col-6">
			{{ Form::label('title','Title : ')}}
			{{ Form::text('title',$about->title,['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('name')}}</span> -->
		</div>
		<div class="form-group col-6">
			{{ Form::label('phone','Số điện thoại : ')}}
			{{ Form::text('phone',$about->phone,['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('description')}}</span> -->
		</div>	
		<div class="form-group col-6">
			{{ Form::label('content','Nội dung : ')}}
			{{ Form::text('content',$about->content,['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('name')}}</span> -->
		</div>
		<div class="form-group col-6">
			{{ Form::label('email','Email : ')}}
			{{ Form::text('email',$about->email,['class'=>'form-control'])}}
			<!-- <span class="text-danger">{{ $errors->first('name')}}</span> -->
		</div>
		<div class="form-group col-6">
			{{Form::label('logo:','',['class'=>'font-weight-bold'])}}
			{{Form::file('about_img',null,['class'=>'form-control'])}}
			
		</div>
			<div class="form-group col-6 ">
			{{ Form::label('created_by','Create_by : ')}}
			{{ Form::text('created_by','',['class'=>'form-control'])}}
			
		</div>
		<div class="form-group col-6 ">
			{{ Form::label('updated_by','Update_by : ')}}
			{{ Form::text('updated_by','',['class'=>'form-control'])}}
			
		</div>

	</div>
	<div class="form-group">
		{{ Form::submit('Lưu',['class'=>'btn btn-outline-success']) }}
		<a class="btn btn-outline-danger" href="">Quay lại</a>
	</div>
	{{ Form::close() }}
		</div>
	</div>
</div>
@endsection