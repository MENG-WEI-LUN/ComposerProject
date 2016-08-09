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
                      <th>照片檔</th>
                      <th>編號</th>
                      <th>發現日期</th>
                      <th>領取狀況</th>
                      <th></th>
                    </tr>
                    @foreach($data as $datus)
                    <tr>
                      <td>{{$datus->name}}</td>
                      <td>{{$datus->picture}}</td>
                      <td>{{$datus->id}}</td>
                      <td>{{$datus->date}}</td>
                      @if($datus->status === 1)
                      <td>已領取</td>
                      @else
                      <td>未領取</td>
                      @endif                      
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