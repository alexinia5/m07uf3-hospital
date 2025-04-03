<!-- Edit Appointment Template -->
@extends('layouts.form')

@section('title', 'Edit Appointment')

@section('content')
  <x-forms.update-form :route="'/appointments/update' . $appointments->id" :data="['Date_hour', 'Motive', 'Floor_num', 'Observations', 'Doctor_id', 'Nurse_id', 'Patient_id']"/>
@endsection