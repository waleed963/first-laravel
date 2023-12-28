@extends('layout.app')
@section('title', '....' )

@section('content')

<!-- general form elements disabled -->
<section class="content">

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"> إدخال يتيم جديد </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form  action="{{route('orphans.store')}}" method="post" >
                @csrf
                <div class="row">
                                <!-- Start left column -->
                                <div class="col-md-6">
                                    <div class="box-body">
                                                <div class="form-group">
                                                    <label for="name"> اسم اليتيم </label>
                                                    <input type="text" name="orphan-name" class="form-control" id="name" value="{{old('orphan-name')}}" placeholder=" اسم اليتيم ">
                                                    @error('orphan-name')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="guardian"> اسم الوصي </label>
                                                    <input type="text" name="guardian-name" class="form-control"  value="{{old('guardian-name')}}" id="guardian" placeholder=" اسم الوصي ">
                                                    @error('guardian-name')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="sponsor"> اسم الكفيل </label>
                                                    <input type="text" name="sponsor-name" class="form-control"  value="{{old('$orphan->sponsor->sponsor-name')}}" id="sponsor" placeholder=" اسم الكفيل ">
                                                    @error('sponsor-name')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="date"> تاريخ الولادة </label>
                                                    <input type="date" name="date" class="form-control" value="{{old('date')}}" id="date" placeholder=" تاريخ الولادة ">
                                                    @error('date')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="amount"> مبلغ الكفالة </label>
                                                    <input type="number" name="oamount" class="form-control" value="{{old('oamount')}}" id="amount" placeholder=" مبلغ الكفالة ">
                                                    @error('oamount')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                    </div>
                                </div>
                                <!--End left column-->
                                <!--Start right column-->
                                <div class="col-md-6">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="card_id"> رقم البطاقة </label>
                                            <input type="number" name="card-id" class="form-control" value="{{old('card-id')}}" id="card_id" placeholder=" رقم البطاقة ">
                                                    @error('card-id')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="last_amount"> آخر تاريخ للدفع </label>
                                            <input type="date" name="olast-damount" class="form-control" value="{{old('olast-damount')}}" id="last_amount" placeholder=" آخر تاريخ للدفع ">
                                            @error('olast-damount')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="phonenumber"> الهاتف </label>
                                                <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <input type="number" name="ophonenumber" class="form-control" value="{{old('ophonenumber')}}" id="phonenumber" placeholder=" الهاتف ">
                                                        @error('ophonenumber')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="note"> ملاحظات </label>
                                            <input type="text" name="onote" class="form-control" value="{{old('onote')}}" id="note" placeholder=" ملاحظات ">
                                            @error('onote')
                                                    <div class="form-error">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                        </div>
                                    </div>
                                    <!--End right column-->
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