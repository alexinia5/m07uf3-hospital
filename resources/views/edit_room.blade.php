<!-- Edit Room Template -->
@extends('layouts.form')

@section('title', 'Edit Room')

@section('content')
  <x-forms.update-form :route="'/rooms/update/' . $rooms->id" :data="['Availability', 'Date Admission', 'Floor_num', 'Patient_ID']"/>
@endsection