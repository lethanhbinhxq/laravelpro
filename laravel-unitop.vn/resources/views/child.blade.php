@extends('layouts.app')

@section('title', 'Tiêu đề trang child')

@section('content')
<p>Nội dung trang con</p>
{{--
<p>Họ và tên: {{ $data }}</p>
<p>HTML: {!! $html !!}</p>
--}}

@if ($data % 2 == 0)
<p>{{ $data }} là số chẫn</p>
@endif

@endsection

@section('sidebar')
@parent
<p>Sidebar trang con</p>
@endsection