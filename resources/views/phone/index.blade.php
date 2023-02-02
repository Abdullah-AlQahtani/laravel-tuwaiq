@extends('layouts.app')



@section('content')

<div class="text-center">
    <h1>أهلاً بكم في متجر التكنولوجيا الحديثة لبيع الهواتف</h1>
    <h1><a class="btn btn-success" href="{{ route('getPhones') }}">استعراض الهواتف الجديدة</a></h1>
    <h1><a class="btn btn-primary" href="{{ route('oldPhones') }}">استعراض الهواتف القديمة</a></h1>
</div>


@endsection



