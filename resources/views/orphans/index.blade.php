@extends('layout.app')
@section('title', '....' )

@section('content')


<section class="content">
      <div class="section" >
        <a href="{{ route('orphans.create') }}" type="button" class="btn btn-success m-2"> إنشاء جديد</a>
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
                    <!-- <th>التسلسل</th> -->
                    <th> {{__('words.Orphan_name')}} </th>
                    <th> {{__('words.Name_of_guardian')}} </th>
                    <th> {{__('words.Name_of_sponsor')}} </th>
                    <th> {{__('words.Birth_date')}} </th>
                    <th> {{__('words.The_bail_amount_for_the_guarantor')}} </th>
                    <th> {{__('words.Card_number')}} </th>
                    <th> {{__('words.Last_payment_date')}} </th>
                    <th> {{__('words.Phone_number_of_orphan')}} </th>
                    <th> {{__('words.Notes_for_the_orphan')}} </th>
                    <th>{{__('words.Options')}}</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($orphans as $orphan)
                  <tr>
                      <!-- <td>{{$orphan->id}}</td> -->
                      <td>{{$orphan->orphanname}}</td>
                      <td>{{$orphan->guardianname}}</td>
                      <td>{{$orphan->sponsorname}}</td>
                      <td>{{$orphan->dateofbirth}}</td>
                      <td>{{$orphan->oamount}}</td>
                      <td>{{$orphan->cardid}}</td>
                      <td>{{$orphan->bail->implode('olastdamount')}}</td>
                      <td>{{$orphan->ophonenumber}}</td>
                      <td>{{$orphan->onote}}</td>
                      <td >
                        <a href="{{route('orphans.show' ,  $orphan-> id ) }}" class="btn btn-warning  ">{{__('words.Show')}}</a>
                        <!-- <div class="row">
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
                        </div> -->
                      </td>
                    </tr>
                    @endforeach
                    @else <p class="text-center"> {{__('words.No_data_to_show')}} </p>
                    @endif

                </tbody>
              </table>
              {!!$orphans->links()!!}
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

 

