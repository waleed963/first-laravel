@extends('layout.app')
@section('title', '....' )

@section('content')


<section class="content">

    <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> جدول الكفالة </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="" method="post">
                    @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="box-body">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="sponsorname"> : اسم اليتيم </label>
                                    <input type="text" name="orphanname" class="form-control" value="{{ $bail->orphanname}}" size="7">
                                </div>
                                <div class="form-group">
                                    <label for="sponsorname"> : اسم الوصي </label>
                                    <input type="text" name="guardianname" class="form-control" value="{{ $bail->guardianname}}" size="7">
                                </div>
                                <div class="form-group">
                                    <label for="sponsorname"> : مبلغ الكفالة </label>
                                    <input type="text" name="oamount" class="form-control" value="{{ $bail->oamount}}" size="3">
                                </div>
                                <div class="form-group">
                                    <label for="sponsorname"> : رقم البطاقة </label>
                                    <input type="text" name="cardid" class="form-control" value="{{ $bail->cardid}}" size="3">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="sponsorname"> : آخر تاريخ استلام </label>
                                    <input type="date" name="olastdamount" value="{{ $bail->olastdamount}}" class="form-control" size="1">
                                </div>
                                <div class="form-group">
                                    <label for="sponsorname"> : الهاتف </label>
                                    <input type="text" name="ophonenumber" class="form-control" value="{{ $bail->ophonenumber}}" size="3">
                                </div>
                                <div class="form-group">
                                    <label for="sponsorname"> : ملاحظات </label>
                                    <input type="text" name="bnote" class="form-control" value="{{ $bail->bnote}}" size="5" >
                                </div>
                                <div class="form-group">
                                    <label for="sponsorname"> : آخرى </label>
                                    <input type="checkbox" value="{{ $bail -> chekbail }}" name="chekbail" class="minimal ">
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- submit button-->
                    <div class=" text-center center">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                      </div>
                </form>
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