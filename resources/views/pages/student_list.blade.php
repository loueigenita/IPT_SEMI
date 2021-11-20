@extends('layouts.app')
@section('content')

<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Lastname</th>
            <th scope="col">Firstname</th>
            <th scope="col">Course</th>
            <th scope="col">Year</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($student as $list)
                <tr>
                    <td>{{ $list->lastname }}</td>
                    <td>{{ $list->firstname }}</td>
                    <td>{{ $list->course }}</td>
                    <td>{{ $list->year }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>
