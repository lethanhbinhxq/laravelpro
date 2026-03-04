@extends('layouts.app')

@section('title', 'Tiêu đề trang child')

@section('content')
<p>Nội dung trang con</p>

@isset($post_title)
    <p>Tiêu đề: {{ $post_title }}</p>
@endisset
{{--
<p>Họ và tên: {{ $data }}</p>
<p>HTML: {!! $html !!}</p>
--}}

@empty($user)
    <p>Không có user nào</p>
@endempty

@if ($data % 2 == 0)
<p>{{ $data }} là số chẫn</p>
@else
<p>{{ $data }} là số lẻ</p>
@endif

@endsection

@section('sidebar')
@parent
<p>Sidebar trang con</p>
@endsection