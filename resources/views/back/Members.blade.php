@extends('layouts.master')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <font color="#000000" face="微軟正黑體">成員管理 <small>所有成員列表</small></font>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <font color="#000000" face="微軟正黑體">
    <div class="row" style="margin-bottom: 2px; text-align:center">
        <div>
            
            <a href="{{route('back.members.create')}}" class="btn btn-success"><font color="#ffffff" face="微軟正黑體"><i class="fa fa-plus-circle"> 新增成員</i></font></a>
            
        </div>
    </div>
    </font>
    <br>
    <!-- /.row -->
    <font color="#000000" face="微軟正黑體" style="text-align: center">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="100" style="text-align: center">姓名</th>
                            <th width="100" style="text-align: center">英文名字</th>
                            <th width="100" style="text-align: center">級</th>
                            <th width="100" style="text-align: center">班級</th>
                            <th width="300" style="text-align: center">專長</th>
                            <th width="300" style="text-align: center">Email</th>
                            <th width="100" style="text-align: center">修改</th>
                            <th width="100" style="text-align: center">刪除</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $mb)
                            <tr>
                                <td>{{$mb->name}}</td>
                                <td>{{$mb->name_en}}</td>
                                <td>{{$mb->year}}</td>
                                <td>{{$mb->class}}</td>
                                <td>{{$mb->skill}}</td>
                                <td>{{$mb->email}}</td>
                                
                                <td><a href="{{route('back.members.edit',$mb->id)}}" class="btn btn-info" style="text-decoration:none;"><i class="fa fa-edit"> 修改</i></a></td>
                                
                                
                                <td>
                                    <form action="{{route('back.members.destroy',$mb->id)}}" method="POST" onsubmit="return ConfirmDelete()">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button  class="btn btn-danger"><i class="fa fa-trash"> 刪除</i></button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </font>

    <script>
        function ConfirmDelete()
        {
            var x = confirm("確定要刪除該成員嗎?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

    <!-- /.row -->
@endsection