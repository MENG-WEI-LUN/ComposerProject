@extends('layouts.frame')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
	            <div class="text-title">
	            	<p>失物發佈</p>
	            </div>
	            <div class="create-btn"><button type="button" class="btn btn-success btn-lg ">新增</button></div>      
            </div>
             <div >
                <table border="1" style="width:80%;overflow: auto;">
                  <tbody>
                    <tr>
                      <th>名稱</th>
                      <th>IP位址</th>
                      <th>登入時間</th>
                      <th>登出時間</th>
                      <th></th>
                    </tr>
                    @foreach($data as $datus)
                    <tr>
                      <td>{{$datus->Account}}</td>
                      <td>{{$datus->IP}}</td>
                      <td>{{$datus->Login}}</td>
                      <td>{{$datus->Logout}}</td>
                      <td><button type="button" class="btn btn-success btn ">編輯</button> </td>
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