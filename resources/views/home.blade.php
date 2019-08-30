@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1eFearu6YiJHGqUARY5Cn9N6KAyQbMF6DjHjb0tl_EDNeOIO6" alt=""
             style="height:150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153 </strong>Points</div>
                <div class="pr-5"><strong>23k </strong>Followers</div>
                <div class="pr-5"><strong>212 </strong>Following</div>
            </div>
            <div class="font-weight-bold pt-3">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="http://img.mwc.com.vn/giay-thoi-trang?&w=450&h=450&FileInput=//Upload/2019/05/o1cn01ogvyou1vq4fdefpwq-0-item-pic.gif" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://img.nhabanhang.net/cache/img/aHR0cHM6Ly92bi10ZXN0LTExLnNsYXRpYy5uZXQvcC83YWMyZjk2NzY4ZjJlZWU5NDk5ODFlNzQ2MTRmNDZlNi5qcGc=.jpg"class="w-100">
        </div>
        <div class="col-4">
            <img src="https://baohothanhnam.com/wp-content/uploads/2018/04/19.jpg"class="w-100">
        </div>
    </div>
</div>
@endsection
