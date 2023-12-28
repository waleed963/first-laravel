@extends('layout.app')
@section('title', '....' )

@section('content')


<ul class="accordion">
        <li>
            <img src="{{ url ('images/img1.jpg')}}" alt="">
            <div class="content">
                <span>
                    <h2>Carmen Rios</h2>
                    <p>Frontend</p>
                </span>
            </div>
        </li>
        <li>
            <img src="{{ url ('images/img2.jpg')}}" alt="">
            <div class="content">
                <span>
                    <h2>Carmen Rios</h2>
                    <p>Frontend</p>
                </span>
            </div>
        </li>
        <li>
            <img src="{{ url ('images/img3.jpg')}}" alt="">
            <div class="content">
                <span>
                    <h2>Carmen Rios</h2>
                    <p>Frontend</p>
                </span>
            </div>
        </li>
        <li>
            <img src="{{ url ('images/img4.jpg')}}" alt="">
            <div class="content">
                <span>
                    <h2>Carmen Rios</h2>
                    <p>Frontend</p>
                </span>
            </div>
        </li>
    </ul>
    



@endsection