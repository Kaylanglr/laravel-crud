@extends('layout')

@section('titel', 'Overzicht')





@section('content')
    @if(count($projects) > 0)
        <table>
            <thead>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Status</th>
                <th>Startdatum</th>
                <th>EindDatum</th>
                <th></th>
            </thead>
            @foreach($projects as $project) 
            <tr>
                <td>{{$project['project_naam']}}</td>
                <td>{{$project['project_beschrijving']}}</td>
                <td>{{$project['project_status']}}</td>
                <td>{{$project['project_start']}}</td>
                <td>{{$project['project_eind']}}</td>
                <td>
                <form method="POST" action="{{route('projects.destroy', ['project' => $project['id']])}}">
                        @method('DELETE')
                        @csrf
                        <button  class="complete" type="submit">
                        <i class="fa-solid fa-check"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @else 
        <div class="empty">
            <h1>Er zijn nog geen projecten geregistreerd!</h1>
        </div>
    @endif
    <div class="add">
        <a href="{{route('projects.create')}}">Voeg een project toe</a>
    </div>
@endsection


@section('scripts')

@endsection


@section('styles')
<link rel="stylesheet" href="{{url('css/overzicht.style.css')}}">
@endsection