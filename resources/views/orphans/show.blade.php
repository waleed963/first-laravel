@extends('layout.app')
@section('title', '....' )

@section('content')

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> بيانات اليتيم {{$orphan->orphanname}} </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row ">
                  <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <h5> : {{__('words.Name_of_sponsor')}}  </h5>
                    <strong>{{$orphan->sponsorname}}</strong>
                    <h5> :  {{__('words.phone_number_of_sponsor')}} </h5>
                    <strong>{{$orphan->sphonenumber}}</strong>
                    <h5> : {{__('words.Last_payment_date')}} </h5>
                    <strong>({{$orphan->slastdamount}})</strong>
                    <h5> : {{__('words.Beginning_of_the_sponsorship')}} </h5>
                    <strong>({{$orphan->fromdate}})</strong>
                    <h5> : {{__('words.Notes_to_the_sponsor')}} </h5>
                    <strong>{{$orphan->snote}}</strong>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <h5> : {{__('words.Orphan_name')}} </h5>
                    <strong>{{$orphan->orphanname}}</strong>
                    <h5> : {{__('words.Birth_date')}} </h5>
                    <strong>({{$orphan->dateofbirth}})</strong>
                    <h5> : {{__('words.Sponsorship_amount_for_the_orphan')}} </h5>
                    <strong>{{$orphan->oamount}}</strong>
                    <h5> : {{__('words.End_of_warranty')}} </h5>
                    <strong>({{$orphan->todate}})</strong>
                    <h5> : {{__('words.Notes_for_the_orphan')}} </h5>
                    <strong>{{$orphan->onote}}</strong>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <h5> : {{__('words.Name_of_guardian')}} </h5>
                    <strong>{{$orphan->guardianname}}</strong>
                    <h5> : {{__('words.Card_number')}} </h5>
                    <strong>{{$orphan->cardid}}</strong>
                    <h5> : {{__('words.The_bail_amount_for_the_guarantor')}} </h5>
                    <strong>{{$orphan->samount}}</strong>
                    <h5> :  </h5>
                    <strong>({{$orphan->olastdamount}})</strong>
                    <h5> :  {{__('words.Phone_number_of_orphan')}} </h5>
                    <strong>{{$orphan->ophonenumber}}</strong>
                  </div>
                </div>
                <div class="row text-center center">
                <div class="col-lg-2 col-md-2 col-sm-2">
                      <form action="{{route('orphans.destroy', $orphan->id )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger "> {{__('words.Delete')}} </button>
                      </form>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                      <a href="{{route('orphans.edit' ,  $orphan-> id ) }}" class="btn btn-primary ">  {{__('words.Edit')}} </a>
                    </div>
                </div>
              
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