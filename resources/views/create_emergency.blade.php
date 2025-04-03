<!-- Create Emergency Template -->
@extends('layouts.form')

@section('title', 'Create Emergency')

@section('content')
  <x-forms.create-form :route="'/emergencies/store'" :data="['Date', 'Level', 'Diagnosis', 'Floor_Num', 'Doctor_ID', 'Nurse_ID', 'Patient_ID']"/>
@endsection