<!-- Edit Medical History Template -->
@extends('layouts.form')

@section('title', 'Edit Medical History')

@section('content')
  <x-forms.update-form :route="'/medicalhistories/update' . $medicalhistories->id" :data="['Date', 'Diagnosis', 'Treatment', 'Patient_id']"/>
@endsection