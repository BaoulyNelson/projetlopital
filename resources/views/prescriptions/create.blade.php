@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center mb-4">Ajouter une Prescription</h1>
        <form action="{{ route('prescriptions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="idconsultation">Consultation</label>
                <select name="idconsultation" class="form-control" id="idconsultation" required>
                    @foreach($consultations as $consultation)
                    <option value="{{ $consultation->id }}">{{ $consultation->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="prescription">Prescription</label>
                <textarea name="prescription" class="form-control" id="prescription" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection