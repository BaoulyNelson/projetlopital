@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier une Prescription</h1>
    <form action="{{ route('prescriptions.update', $prescription->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="idconsultation">Consultation</label>
            <select name="idconsultation" class="form-control" id="idconsultation" required>
                @foreach($consultations as $consultation)
                <option value="{{ $consultation->id }}" {{ $consultation->id == $prescription->idconsultation ? 'selected' : '' }}>{{ $consultation->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="prescription">Prescription</label>
            <textarea name="prescription" class="form-control" id="prescription" required>{{ $prescription->prescription }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
