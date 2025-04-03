<!-- Create Medical History Template -->
@extends('layouts.form')

@section('title', 'Create Medical History')

@section('content')
  <x-forms.create-form :route="'/medicalhistories/store'" :data="['Date', 'Diagnosis', 'Treatment', 'Patient_id']"/>
@endsection