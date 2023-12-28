@extends('layout.app')
@section('title', '....' )

@section('content')

<!-- general form elements disabled -->
<section class="content">

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"> تعديل {{ $orphan->orphan-name }} </h3>
           

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form  action="{{route('orphans.update' , $orphan->id)}}" method="post" >
                @csrf
                @method('PUT')
                <div class="row">
                                <!-- Start left column -->
                                <div class="col-md-4">
                                    <div class="box-body">
                                                <div class="form-group">
                                                    <label for="exampleInputname"> اسم اليتيم </label>
                                                    <input type="text" name="orphan-name" class="form-control" id="exampleInputname" value="{{$orphan -> orphan-name}}" placeholder=" اسم اليتيم ">
                                                    @error('orphan-name')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputdate"> تاريخ الولادة </label>
                                                    <input type="date" name="date" class="form-control" value="{{$orphan -> date}}" id="exampleInputdate" placeholder=" تاريخ الولادة ">
                                                    @error('date')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputamount"> مبلغ الكفالة </label>
                                                    <input type="number" name="oamount" class="form-control" value="{{$orphan -> oamount}}" id="exampleInputamount" placeholder=" مبلغ الكفالة ">
                                                    @error('oamount')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputnote"> ملاحظات </label>
                                                    <input type="text" name="onote" class="form-control" value="{{$orphan -> onote}}" id="exampleInputnote" placeholder=" ملاحظات ">
                                                    @error('onote')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--End left column-->
                                <!--Start right column-->
                                <div class="col-md-4">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputguardianEmail2"> اسم الوصي </label>
                                            <input type="text" name="guardian-name" class="form-control"  value="{{$orphan -> guardian-name}}" id="exampleInputguardian" placeholder=" اسم الوصي ">
                                               @error('guardian-name')
                                            <div class="form-error">
                                                {{$message}}
                                            </div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputcard_id"> رقم البطاقة </label>
                                            <input type="number" name="card-id" class="form-control" value="{{$orphan -> card-id}}" id="exampleInputcard_id" placeholder=" رقم البطاقة ">
                                            @error('card-id')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputlast_amount"> آخر تاريخ للدفع </label>
                                            <input type="date" name="olast-damount" class="form-control" value="{{$orphan -> olast-damount}}" id="exampleInputlast_amount" placeholder=" آخر تاريخ للدفع ">
                                            @error('olast-damount')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputphonenumber"> الهاتف </label>
                                                <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <input type="number" name="ophonenumber" class="form-control" value="{{$orphan -> ophonenumber}}" id="exampleInputphonenumber" placeholder=" الهاتف ">
                                                        @error('ophonenumber')
                                                            <div class="form-error">
                                                                {{$message}}
                                                            </div>
                                                        @enderror
                                                </div>
                                        </div>
                                        
                                    </div>
                                    <!--End right column-->
                                <div class="col-md-4">
                                    <div class="box-body">
                                        <div class="form-group">
                                                <label for="exampleInputsponsor"> اسم الكفيل </label>
                                                    <input type="text" name="sponsor-name" class="form-control"  value="{{$orphan ->sponsor-> sponsor-name}}" id="exampleInputsponsor" placeholder=" اسم الكفيل ">
                                                    @error('sponsor-name')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputcard_id"> الهاتف </label>
                                                <input type="number" name="sphonenumber" class="form-control" value="{{$sponsor -> sphonenumber}}" id="exampleInputcard_id" placeholder="  هاتف الكفيل ">
                                                    @error('sphonenumber')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputlast_amount"> آخر تاريخ دفع </label>
                                            <input type="date" name="slast-damount" class="form-control" value="{{$sponsor -> slast-damount}}" id="exampleInputlast_amount" placeholder=" آخر تاريخ دفعه الكفيل ">
                                            @error('slast-damount')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputphonenumber"> الهاتف </label>
                                                <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <input type="date" name="ophonenumber" class="form-control" value="{{$orphan -> ophonenumber}}" id="exampleInputphonenumber" placeholder=" الهاتف ">
                                                        @error('ophonenumber')
                                                            <div class="form-error">
                                                                {{$message}}
                                                            </div>
                                                        @enderror
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnote"> ملاحظات للكفيل </label>
                                            <input type="text" name="onote" class="form-control" value="{{$sponsor -> snote}}" id="exampleInputnote" placeholder=" ملاحظات للكفيل">
                                            @error('snote')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                    </div>

                                <div>
                                    <!-- submit button-->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

</section>

@endsection