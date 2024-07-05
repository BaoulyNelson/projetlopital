@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier un Dossier</h1>
    <form action="{{ route('dossiers.update', $dossier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" class="form-control" id="code" value="{{ $dossier->code }}" required>
        </div>
        <div class="form-group">
            <label for="idconsultation">Consultation</label>
            <select name="idconsultation" class="form-control" id="idconsultation" required>
                @foreach($consultations as $consultation)
                <option value="{{ $consultation->id }}" {{ $consultation->id == $dossier->idconsultation ? 'selected' : '' }}>{{ $consultation->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date_enregistrement">Date d'Enregistrement</label>
            <input type="date" name="date_enregistrement" class="form-control" id="date_enregistrement" value="{{ $dossier->date_enregistrement }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
