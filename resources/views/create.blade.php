@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <title>Todo List</title>
</head>


        <hr>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                เพิ่มรายการ
                </h4>
            </div>
            <div class="panel-body">
                <form action="/store" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">กรอกชื่อรายการ :: </label>
                        <input type="text" name="detail" placeholder="ชื่อรายการ" request class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="selectCategory">เลือกหมวดหมู่ :: </label>
                        <select name="category_id" id="" class="form-control">

                            @foreach($categories as $items)
                        <option value="{{$items->id}}">{{ $items->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> บันทึก</button>
                </form>
            </div>
        </div>

@endsection
