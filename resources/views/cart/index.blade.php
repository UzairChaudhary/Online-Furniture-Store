@extends('master')


@section('content')

<table>
    <thead>
    <th>Name</th>
    <th>Color</th>
    </thead>
    <tbody>
        @foreach($list as $item)
        <tr>
            <td>{{$item -> productName}}</td>
            <td>{{$item -> productName}}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection('content')