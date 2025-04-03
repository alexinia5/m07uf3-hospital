<!-- Create Room Template -->
@extends('layouts.form')

@section('title', 'Create Room')

@section('content')
  <x-forms.create-form :route="'/rooms/store'" :data="['Availability', 'Date Admission', 'Floor_num', 'Patient_ID']"/>
@endsection