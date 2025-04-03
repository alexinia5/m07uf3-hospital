<!-- Create Specialty Template -->
@extends('layouts.form')

@section('title', 'Create Specialty')

@section('content')
  <x-forms.create-form :route="'/specialties/store'" :data="['Name', 'Location Departament']"/>
@endsection