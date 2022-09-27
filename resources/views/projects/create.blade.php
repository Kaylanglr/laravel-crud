@extends('layout')

@section('titel', 'Voeg een project toe')





@section('content')
    <div class="create-form">
        <h1>Voeg een project toe</h1>
        <form action="{{route('projects.store')}}" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label for="naam">Project naam:</label></td>
                    <td><input type="text" name="project_naam"></td>
                </tr>
                <tr>
                    <td>
                    @error('project_naam')
                        <div class="form-error">
                            {{$message}}
                        </div>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <td><label for="naam">Project omschrijving:</label></td>
                    <td><input type="text" name="project_desc"></td>
                </tr>
                <tr>
                    <td>
                    @error('project_desc')
                        <div class="form-error">
                            {{$message}}
                        </div>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <td><label for="naam">Project status:</label></td>
                    <td><input type="text" name="project_status"></td>
                </tr>
                @error('project_status')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
                <tr>
                    <td><label for="naam">Startddatum:</label></td>
                    <td><input type="date" name="startdatum"></td>
                </tr>
                @error('startdatum')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
                <tr>
                    <td><label for="naam">Einddatum:</label></td>
                    <td><input type="date" name="einddatum"></td>
                </tr>
                @error('einddatum')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </table>
            <div class="submit">
                <input type="submit" name="submit" value="Voeg toe">
            </div>
        </form>
    </div>
@endsection


@section('scripts')

@endsection


@section('styles')
<link rel="stylesheet" href="{{url('css/create.style.css')}}">
@endsection