@extends('layout.app')
@section('title', '....' )

@section('content')

<section class="content direction">
  <div class="section" >
    <!-- Button trigger modal -->
      <a class="btn btn-success m-2" href="" type="button" data-toggle="modal" data-target="#exampleModal"> إنشاء جديد </a>

      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> المستخدمين </h3>
            </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table direction table-bordered table-striped">
                  
                  <thead>
                    <tr >
                      <th> اسم المستخدم</th>
                      <th> نوعه </th>
                      <th> كلمة السر </th>
                      <th> آخرى </th>
                    </tr>
                  </thead>
                  @foreach($users as $user)
                  <tbody>
                    <tr>
                        <td>{{$user-> name}}</td>
                        <td>{{$user-> email}}</td>
                        <td>{{$user-> password}}</td>
                        <td><div class="row">
                                <div class="col-sm-4 col-lg-3">
                                <a href="" class="btn btn-primary " type="button" data-toggle="modal"  data-target="#ModalEdit{{ $user->id }}">تعديل</a>
                                </div>
                                <div class="col-sm-4 col-lg-3">
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger ">حذف</button>
                                    </form>
                                </div>
                            </div> 
                        </td>
                    </tr>
                  </tbody>
                  @endforeach

                </table>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->





 <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> إنشاء مستخدم </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  action="{{route('users.store')}}" method="post" >
                  @csrf
                      <!-- Start left column -->
                      <div class="box-body">
                          <div class="form-group">
                                  <label for="name"> اسم المستخدم </label>
                                      <input type="text" name="name" class="form-control"  value="{{old('name')}}" id="name" placeholder=" اسم المستخدم ">
                                      @error('name')
                                      <div class="form-error">
                                          {{$message}}
                                      </div>
                                      @enderror
                          </div>
                          <div class="form-group">
                              <label for="email"> نوعه </label>
                                  <input type="text" name="email" class="form-control" value="{{old('email')}}" id="email" placeholder=" نوعه ">
                                      @error('email')
                                      <div class="form-error">
                                          {{$message}}
                                      </div>
                                      @enderror
                          </div>
                          <div class="form-group">
                              <label for="password"> كلمة السر </label>
                              <input type="password" name="password" class="form-control" value="{{old('password')}}" id="password" placeholder=" آخر تاريخ دفعه الكفيل ">
                              @error('password')
                                      <div class="form-error">
                                          {{$message}}
                                      </div>
                                      @enderror
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"> إلغاء </button>
                      <button type="submit" class="btn btn-primary"> حفظ </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


 <!-- Modal Edit -->
    <div class="modal fade" id="ModalEdit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> تعديل مستخدم </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  action="{{route('users.update', $user->id)}}" method="post" >
                  @csrf
                  @method('PUT')
                      <!-- Start left column -->
                      <div class="box-body">
                          <div class="form-group">
                                  <label for="name"> اسم المستخدم </label>
                                      <input type="text" name="name" class="form-control"  value="{{$user->name}}" id="name" placeholder=" اسم المستخدم ">
                                      @error('name')
                                      <div class="form-error">
                                          {{$message}}
                                      </div>
                                      @enderror
                          </div>
                          <div class="form-group">
                              <label for="email"> نوعه </label>
                                  <input type="text" name="email" class="form-control" value="{{$user->email}}" id="email" placeholder=" نوعه ">
                                      @error('email')
                                      <div class="form-error">
                                          {{$message}}
                                      </div>
                                      @enderror
                          </div>
                          <div class="form-group">
                              <label for="password"> كلمة السر </label>
                              <input type="password" name="password" class="form-control" value="{{$user->password}}" id="password" placeholder=" كلمة السر ">
                              @error('password')
                                      <div class="form-error">
                                          {{$message}}
                                      </div>
                                      @enderror
                          </div>
                      </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"> إلغاء </button>
                      <button type="submit" class="btn btn-primary"> حفظ </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
  </section>



@endsection