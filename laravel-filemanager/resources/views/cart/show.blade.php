@extends('layout.shop')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Giỏ hàng</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $t = 0;
                        @endphp
                        @foreach (Cart::content() as $row)
                        @php
                        $t++;
                        @endphp
                            <tr>
                                <td scope="row">{{ $t }}</td>
                                <td>
                                    <img src="{{ asset($row->options->thumbnail) }}" width="100px" alt="">
                                </td>
                                <td scope="col"><a href="">{{$row->name}}</a></td>
                                <td scope="col">{{ number_format($row->price, 0, '', '.') }}đ</td>
                                <td scope="col">
                                    <input type="number" style="width:50px; text-align: center" value="{{ $row->qty }}">
                                </td>
                                <td scope="col">{{number_format($row->total, 0, '', '.')}}đ</td>
                                <td><a href="" class="text-danger">Xóa</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan='6' class="text-right">Tổng:</td>
                            <td><strong>{{Cart::total()}}đ</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection