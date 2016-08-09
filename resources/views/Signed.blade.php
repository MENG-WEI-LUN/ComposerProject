@extends('layouts.frame')

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               <div class="text-title">
                    <p><h1>簽呈作業</h1></p>
                </div>
                <!-- <div class="create-btn"><button type="button" class="btn btn-success btn-lg ">新增</button></div>       -->
            </div>
              <div >
                <table border="1" style="width:80%;overflow: auto;">
                  <tbody>
                    <tr>
                      <th>活動名稱</th>
                      <th>申請人</th>
                      <th>活動時間</th>
                      <th>指導老師</th>
                      <th></th>
                    </tr>
                    @foreach($data as $datus)
                    <tr>
                      <td>{{$datus->title}}</td>
                      <td>{{$datus->name}}</td>
                      <td>{{$datus->day}}</td>
                      <td>{{$datus->teacher}}</td>
                      <td><button type="button" class="btn btn-success btn ">下載</button> </td>
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