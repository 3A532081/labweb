@extends('layouts.master')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <font color="#000000" face="微軟正黑體"><i class="fa fa-plus-circle"></i>新增成員 </font>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->
    <div class="row justify-content-center">
        <form action="{{ route('back.members') }}" method="POST" role="form" enctype ="multipart/form-data">{{ csrf_field() }}
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        {{--姓名--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('姓名') }}</font></label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        {{--英文名字--}}
                        <div class="form-group row">
                            <label for="name_en" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('英文名字') }}</font></label>
                            <div class="col-md-8">
                                <input id="name_en" type="text" class="form-control" name="name_en" required>
                            </div>
                        </div>
                        {{--級--}}
                        <div class="form-group row">
                            <label for="name_en" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('級') }}</font></label>
                            <div class="col-md-8">
                                <input id="year" type="text" class="form-control" name="year" required>
                            </div>
                        </div>
                        {{--班級--}}
                        <div class="form-group row">
                            <label for="class" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('班級') }}</font></label>
                            <div class="col-md-8">
                                <input id="class" type="text" class="form-control" name="class" required>
                            </div>
                        </div>
                        {{--專長--}}
                        <div class="form-group row">
                            <label for="skill" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('專長') }}</font></label>
                            <div class="col-md-8">
                                <input id="skill" type="text" class="form-control" name="skill" required>
                            </div>
                        </div>
                        {{--Email--}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="5">{{ __('email') }}</font></label>
                            <div class="col-md-8">
                                <input id="email" type="text" class="form-control" name="email" required>
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