@extends('layouts.app')

@section('title', 'Tiêu đề trang child')

@section('content')
<p>Nội dung trang con</p>
@endsection

@section('sidebar')
@parent
<p>Sidebar trang con</p>
@endsection