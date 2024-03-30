@extends('layout.app')
@section('title', '....' )

@section('content')

<section class="content">
  <div class="section" >
      <a class="btn btn-success m-2" href="{{route('bails.create')}}" > إنشاء جديد </a>
  </div>
          
                  
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
              @if(count($bails) > 0)
                <thead>
                  <tr >
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

                <tbody>
                  @foreach($bails as $bail)
                  <tr>
                    <td>{{$bail->orphanname}}</td>
                    <td>{{$bail->guardianname}}</td>
                    <td>{{$bail->oamount}}</td>
                    <td>{{$bail->cardid}}</td>
                    <td>{{$bail->olastdamount}}</td>
                    <td>{{$bail->ophonenumber}}</td>
                    <td>{{$bail->bnote}}</td>
                    <td> {{$bail->chekbail}} </td>
                    <td>
                      <div class="row">
                          <div class="col-sm-4">
                            <a href="{{route('bails.edit' ,  $bail-> id ) }}" class="btn btn-primary ">تعديل</a>
                          </div>
                          <div class="col-sm-4">
                            <form action="{{route('bails.destroy', $bail->id )}}" method="POST">
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
              {!!$bails ->links()!!}
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