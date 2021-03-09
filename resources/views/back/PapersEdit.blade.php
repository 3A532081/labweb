@extends('layouts.master')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <font color="#000000" face="微軟正黑體"><i class="fa fa-plus-circle"></i>修改成員 </font>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->
    <div class="row justify-content-center">
        <form action="/back/papers/{{$papers->id}}" method="POST" role="form" enctype ="multipart/form-data">{{ csrf_field() }}
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    {{--論文名稱--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('論文名稱') }}</font></label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{$papers->name}}" required>
                            </div>
                        </div>
                        {{--出版年--}}
                        <div class="form-group row">
                            <label for="year" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('出版年') }}</font></label>
                            <div class="col-md-8">
                                <input id="year" type="text" class="form-control" name="year" value="{{$papers->year}}" required>
                            </div>
                        </div>
                        {{--作者--}}
                        <div class="form-group row">
                            <label for="author" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('作者') }}</font></label>
                            <div class="col-md-8">
                                <input id="author" type="text" class="form-control" name="author" value="{{$papers->author}}" required>
                            </div>
                        </div>
                        {{--類型--}}
                        <div class="form-group row">
                            <label for="type" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('類型') }}</font></label>
                            <div class="col-md-8">
                                <input id="type" type="text" class="form-control" name="type" value="{{$papers->type}}" required>
                            </div>
                        </div>
                        {{--新增--}}
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="text-align:center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('送出') }}
                                </button>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </form>
    </div>

@endsection