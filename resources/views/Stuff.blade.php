@extends('layouts.frame')
@section('javascript')

function Edit(key,id)
{
    alert("GG");
    {{-- $('#name').val($('#edit_'+key).children().html());
    $('#phone').val($('#edit_'+key).children().next().html());
    $('#ID').val($('#edit_'+key).children().next().next().html()); --}}
}

function Alert(id)
{
    if(confirm("確定要刪除此資料嗎?")){
    location.href="Stuff/"+id;
    }
}

@endsection

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
	            <div class="text-title">
	            	<p>人員管理</p>
	            </div>
	            <div class="create-btn">
	            	<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#stuff-add">新增</button>
	            </div>
            </div>
            {{-- 新增成員 --}}
            <div class="modal fade" id="stuff-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">新增成員資料</h4>
                        </div>
                        <form action="{{URL::asset('Stuff/create')}}" method="post">
                            <div class="modal-body">	                      	  	
                                <p>成員名稱 </p><input type="text" name="name_create"  placeholder="王小明">
                                <p>聯絡資訊 </p><input type="text" name="phone_create"  placeholder="09XXXXXXXX">
                                <p>學號 </p><input type="text" name="ID_create" placeholder="4XXXXXXX">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}" />{{--這是為了Token的意外防範方式--}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                <button type="submit" class="btn btn-primary"  >加入新肝</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->     
            </div>
            {{-- 編輯成員 --}}
            <div class="modal fade" id="stuff-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">編輯成員資料</h4>
                        </div>
                        <div class="modal-body">                              
                            <p>成員名稱 </p><input type="text" id="name" placeholder="王小明">
                            <p>聯絡資訊 </p><input type="text" id="phone" placeholder="09XXXXXXXX">
                            <p>學號 </p><input type="text" id="ID" placeholder="4XXXXXXX">                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">儲存</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->     
            </div>

            <div >
                <table border="1" class="table table-hover" style="width:80%;overflow: auto;">
                  	<tbody>
                    <tr>
                      <th>人員名稱</th>
                      <th>聯絡資訊</th>
                      <th>學號</th>
                      <th></th>
                      <th></th>
                    </tr>
                    @foreach($data as $key => $datus)
                      <tr id="edit_{{$key}}">
                        <td>{{$datus->name}}</td>
                        <td>{{$datus->phone}}</td>
                        <td>{{$datus->stu_id}}</td>
                        <td><button type="button"  class="btn btn-success btn " data-toggle="modal" data-target="#stuff-edit" onclick="Edit({{$key}},{{$datus->id}})">編輯</button></td>
                        <td><button type="button" class="btn btn-danger btn " onclick="Alert({{$datus->id}})">刪除</button></td>
                      </tr>
                    @endforeach
                  	</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
@endsection