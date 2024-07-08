@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center mb-4">Ajouter un Dossier</h1>
        <form action="{{ route('dossiers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" name="code" class="form-control" id="code" required>
            </div>
            <div class="form-group">
                <label for="idconsultation">Consultation</label>
                <select name="idconsultation" class="form-control" id="idconsultation" required>
                    @foreach($consultations as $consultation)
                    <option value="{{ $consultation->id }}">{{ $consultation->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date_enregistrement">Date d'Enregistrement</label>
                <input type="date" name="date_enregistrement" class="form-control" id="date_enregistrement" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection