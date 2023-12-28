@extends('layout.app')
@section('title', '....' )

@section('content')



<section class="content">
      <div class="section" >
        <a href="{{ route('orphans.create') }}" type="button" class="btn btn-success"> إنشاء جديد</a>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">جدول الأيتام</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table direction table-bordered table-striped">
                @if(count($orphans) > 0)
                <thead>
                  <tr >
                    <th>التسلسل</th>
                    <th> اسم اليتيم</th>
                    <th>اسم الوصي</th>
                    <th>اسم الكفيل</th>
                    <th> تاريخ الولادة </th>
                    <th>مبلغ الكفالة</th>
                    <th>رقم البطاقة</th>
                    <th>آخر تاريخ للدفع</th>
                    <th>الهاتف</th>
                    <th>ملاحظات</th>
                    <th>أخرى</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orphans as $orphan)
                  <tr>
                      <td>{{$orphan->id}}</td>
                      <td>{{$orphan->orphan-name}}</td>
                      <td>{{$orphan->guardian-name}}</td>
                      <td>{{$orphan->sponsors->sponsor-name}}</td>
                      <td>{{$orphan->date}}</td>
                      <td>{{$orphan->oamount}}</td>
                      <td>{{$orphan->card-id}}</td>
                      <td>{{$orphan->olast-damount}}</td>
                      <td>{{$orphan->ophonenumber}}</td>
                      <td>{{$orphan->onote}}</td>
                      <td >
                        <div class="row">
                            <div class="col-sm-4">
                              <a href="{{route('orphans.edit' ,  $orphan-> id ) }}" class="btn btn-primary ">تعديل</a>
                            </div>
                            <div class="col-sm-4">
                              <form action="{{route('orphans.destroy', $orphan->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">حذف</button>
                              </form>
                            </div>
                        </div>
                      </td>
                  </tr>
                  @endforeach
                    @else <p class="text-center">لا يوجد بيانات للعرض</p>
                  @endif
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