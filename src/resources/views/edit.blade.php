@extends('layouts.default')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td{
        background-color: #ffffff;
    }
    td {
        padding: 25px 40px;
        background-color: #eeeeee;
        text-align: center;
    }
    button {
        padding: 10px 20px;
        background-color: #289ADC;
    }
</style>
@section('title', 'edit.blade.php')

@section('content')
<form action="/edit" method="POST">
    <table>
         @csrf
         <tr>
            <th>
                id
            </th>
            <td>
                <input type="text" name="id" value="{{$form->id}}">
            </td>
         </tr>
         <tr>
            <th>
                age
            </th>
            <td>
                <input type="text" name="age" value="{{$form->age}}">
            </td>
         </tr>
         <tr>
            <th></th>
            <td>
                <button>送信</button>
            </td>
         </tr>
    </table>
</form>
@endsection