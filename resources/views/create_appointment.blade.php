<!-- Create Appointment Template -->
@extends('layouts.form')

@section('title', 'Create Appointment')

@section('content')
  <x-forms.create-form :route="'/appointments/store'" :data="['Date_hour', 'Motive', 'Floor_num', 'Observations', 'Doctor_id', 'Nurse_id', 'Patient_id']"/>
@endsection