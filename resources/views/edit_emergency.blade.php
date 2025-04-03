<!-- Edit Emergency Template -->
@extends('layouts.form')

@section('title', 'Edit Emergency')

@section('content')
  <x-forms.update-form :route="'/doctors/update/' . $emergencies->id" :data="['Date', 'Level', 'Diagnosis', 'Floor_Num', 'Doctor_ID', 'Nurse_ID', 'Patient_ID']"/>
@endsection