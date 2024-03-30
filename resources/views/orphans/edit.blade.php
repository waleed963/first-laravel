@extends('layout.app')
@section('title', '....' )

@section('content')

<!-- general form elements disabled -->
<section class="content">

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"> {{__('words.Edit')}} {{ $orphan->orphanname }} </h3>
           

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form  action="{{route('orphans.update' , $orphan->id)}}" method="post" >
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Start left column -->
                    <div class="box-body">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                    <label for="sponsorname"> : {{__('words.Name_of_sponsor')}} </label>
                                        <input type="text" name="sponsorname" class="form-control"  value="{{$orphan->sponsorname}}" id="sponsorname" placeholder=" {{__('words.Name_of_sponsor')}} ">
                                        @error('sponsorname')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                        @enderror
                            </div>
                            <div class="form-group">
                                <label for="sphonenumber"> : {{__('words.phone_number_of_sponsor')}} </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="number" name="sphonenumber" class="form-control" value="{{$orphan->sphonenumber}}" id="sphonenumber" placeholder=" {{__('words.phone_number_of_sponsor')}} ">
                                        @error('sphonenumber')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slastdamount"> : {{__('words.Last_payment_date')}}  </label>
                                <input type="date" name="slastdamount" class="form-control" value="{{$orphan->slastdamount}}" id="slastdamount" placeholder=" {{__('words.Last_payment_date')}} ">
                                @error('slastdamount')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                        @enderror
                            </div>
                            <div class="form-group">
                                <label for="fromdate"> : {{__('words.Beginning_of_the_sponsorship')}} </label>
                                            <input type="date" name="fromdate" class="form-control" value="{{$orphan->fromdate}}" id="fromdate" placeholder=" {{__('words.Beginning_of_the_sponsorship')}} ">
                                            @error('fromdate')
                                                <div class="form-error">
                                                    {{$message}}
                                                </div>
                                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="snote"> : {{__('words.Notes_to_the_sponsor')}} </label>
                                    <input type="text" name="snote" class="form-control" value="{{$orphan->snote}}" id="snote" placeholder=" {{__('words.Notes_to_the_sponsor')}} ">
                                @error('snote')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!--End left column-->
                        <!--Start center column-->
                        <div class="col-lg-4 col-md-6 col-sm-12 ">
                            <div class="form-group">
                                    <label for="orphanname"> : {{__('words.Orphan_name')}} </label>
                                        <input type="text" name="orphanname" class="form-control" id="orphanname" value="{{$orphan->orphanname}}" placeholder=" {{__('words.Orphan_name')}} ">
                                    @error('orphanname')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label for="dateofbirth"> : {{__('words.Birth_date')}} </label>
                                        <input type="date" name="dateofbirth" class="form-control" value="{{$orphan->dateofbirth}}" id="dateofbirth" placeholder=" {{__('words.Birth_date')}} ">
                                    @error('dateofbirth')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label for="oamount"> : {{__('words.Sponsorship_amount_for_the_orphan')}} </label>
                                        <input type="number" name="oamount" class="form-control" value="{{$orphan->oamount}}" id="oamount" placeholder=" {{__('words.Sponsorship_amount_for_the_orphan')}} ">
                                    @error('oamount')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label for="todate"> : {{__('words.End_of_warranty')}}  </label>
                                        <input type="date" name="todate" class="form-control" value="{{$orphan->todate}}" id="todate" placeholder=" {{__('words.End_of_warranty')}}">
                                        @error('todate')
                                            <div class="form-error">
                                                {{$message}}
                                            </div>
                                        @enderror
                            </div>
                            <div class="form-group">
                                    <label for="onote">  : {{__('words.Notes_for_the_orphan')}} </label>
                                        <input type="text" name="onote" class="form-control" value="{{$orphan->onote}}" id="onote" placeholder="  {{__('words.Notes_for_the_orphan')}} ">
                                    @error('onote')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>
                        </div>
                        <!--End center column-->
                        <!--Start right column-->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                    <label for="guardianname"> : {{__('words.Name_of_guardian')}} </label>
                                        <input type="text" name="guardianname" class="form-control"  value="{{$orphan->guardianname}}" id="guardianname" placeholder=" {{__('words.Name_of_guardian')}}{{__('words.Name_of_guardian')}} ">
                                    @error('guardianname')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label for="cardid"> : {{__('words.Card_number')}}  </label>
                                        <input type="number" name="cardid" class="form-control" value="{{$orphan->cardid}}" id="cardid" placeholder=" {{__('words.Card_number')}} ">
                                    @error('cardid')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label for="samount"> : {{__('words.The_bail_amount_for_the_guarantor')}} </label>
                                        <input type="number" name="samount" class="form-control" value="{{$orphan->samount}}" id="samount" placeholder=" {{__('words.The_bail_amount_for_the_guarantor')}} ">
                                    @error('samount')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div>
                            <!-- <div class="form-group">
                                    <label for="olastdamount"> آخر تاريخ استلام </label>
                                        <input type="date" name="olastdamount" class="form-control" value="{{$orphan->olastdamount}}" id="olastdamount" placeholder=" آخر تاريخ استلام ">
                                    @error('olastdamount')
                                        <div class="form-error">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div> -->
                            <div class="form-group">
                                <label for="ophonenumber"> : {{__('words.Phone_number_of_orphan')}} </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="number" name="ophonenumber" class="form-control" value="{{$orphan->ophonenumber}}" id="ophonenumber" placeholder=" {{__('words.Phone_number_of_orphan')}} ">
                                            @error('ophonenumber')
                                                <div class="form-error">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                    </div>
                            </div>
                        </div>
                        <!--End right column-->
                    </div>
                <div>
                
                <!-- submit button-->
                <div class=" text-center center">
                    <button type="submit" class="btn btn-primary"> {{__('words.Save')}} </button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

</section>

@endsection