@extends('layout.app')
@section('title', '....' )

@section('content')

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تعديل جدول الأيتام</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table direction table-bordered table-striped">
                <thead>
                <tr>
                  <th>التسلسل</th>
                  <th> اسم اليتيم </th>
                  <th> اسم الوصي </th>
                  <th> اسم الكفيل </th>
                  <th> تاريخ الولادة </th>
                  <th> مبلغ الكفالة </th>
                  <th> رقم البطاقة </th>
                  <th> آخر تاريخ للدفع </th>
                  <th> الهاتف </th>
                  <th> ملاحظات </th>
                  <th> أخرى </th>
                </tr>
                </thead>
                <tbody>
                 
                    <tr>
                    <td>{{$orphan -> id}}</td>
                    <a href=""><td>{{$orphan -> orphan-name}}</td></a>
                    <td>{{$orphan -> guardian-name}}</td>
                    <td>{{$orphan -> sponsor-name}}</td>
                    <td>{{$orphan -> date}}</td>
                    <td>{{$orphan -> amount}}</td>
                    <td>{{$orphan -> card-id}}</td>
                    <td>{{$orphan -> last-damount}}</td>
                    <td>{{$orphan -> phonenumber}}</td>
                    <td>{{$orphan -> note}}</td>
                    <td class="">
                      <a href="{{route('orphans.show' , ['orphan' => $orphan ['id'] ]) }}" class="">تعدبل</a>
                      <!--<form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">حذف</button>
                      </form>-->
                    </td>
                  </tr>
                  
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>




@endsection