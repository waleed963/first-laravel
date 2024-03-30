@extends('layout.app')
@section('title', '....' )

@section('content')


<div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> جدول الكفالة </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table direction table-bordered table-striped">
                
                <thead>
                  <tr >
                    <th> تسلسل </th>
                    <th> اسم اليتيم</th>
                    <th>اسم الوصي</th>
                    <th>مبلغ الكفالة</th>
                    <th>رقم البطاقة</th>
                    <th>آخر تاريخ استلام</th>
                    <th>الهاتف</th>
                    <th>ملاحظات</th>
                    <th>أخرى</th>
                  </tr>
                </thead>
                <form action="{{route('bails.store')}}" method="post">
                  <tbody>
                    
                  @foreach($orphans as $orphan)
                    @csrf
                  <tr>
                      <td><input type="text" name="orphan_id" class="form-control" value="{{$orphan->id}}" disabled size="7"></td>
                      <td><input type="text" name="orphanname" class="form-control" value="{{$orphan->orphanname}}" disabled  size="7"></td>
                      <td><input type="text" name="guardianname" class="form-control" value="{{$orphan->guardianname}}" disabled size="7"></td>
                      <td><input type="text" name="oamount" class="form-control" value="{{$orphan->oamount}}" disabled size="3"></td>
                      <td><input type="text" name="cardid" class="form-control" value="{{$orphan->cardid}}" disabled size="3"></td>
                      <td><input type="date" name="olastdamount" class="form-control"  size="1"></td>
                      <td><input type="text" name="ophonenumber" class="form-control" value="{{$orphan->ophonenumber}}" disabled size="3"></td>
                      <td><input type="text" name="bnote" class="form-control" size="5" ></td>
                      <td>
                        <label>
                          <input type="checkbox" value="True" name="chekbail" class="minimal ">
                        </label>
                      </td>
                  </tr>
                      @endforeach
                      
                    </tbody>
                    <!-- submit button-->
                    <div class=" text-center center">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                      </div>
                  </form>

              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->




@endsection