@extends('admin.layout.main')
@section('title') Trang chủ
@endsection
@section('content')
<div class="mt-2">
    <h4 class="mt-2 ">Slide</h4>
    <div class="row ml-1">
        @if (Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message')}}</p> 
        @elseif(Session::has('err'))    
        <p class="alert alert-danger">{{ Session::get('err')}}</p>
        @endif
    </div>
    <div class="">
        <div class="row">
            <div class="col-9">
                <a href="{{route('slide.create')}}" class="btn btn-outline-secondary mb-2 mt-2">Thêm mới</a>
            </div>
          
    </div>
</div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th >STT</th>
                <th >Link</th>
                <th >Url img</th>
                <th >Display order</th>
                <th colspan="5"> Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($slides as $key => $slides)
                <tr>
                    <td >{{ ++$key }}</td>
                    <td>{{$slides->link}}</td>
                    <td>{{$slides->url_img}}</td>
                    <td>{{$slides->display_order}}</td>
               
                <td colspan="5">
                        {{Form::open(['route' => ['slide.destroy', $slides->id], 'method' => 'DELETE'])}}
                        {{ Form::button('<i class="fas fa-trash-alt text-danger " ></i>', ['type' => 'submit', 'class' => 'text-danger border-0 btn-link float-left'] )  }} 
                        {{ Form::close() }}
                         <a href="{{route('slide.edit',$slides->id)}}" class="ml-1"><i class="far fa-edit "></i></a>
                    </td>
                </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection
