<!-- Edit Specialty Template -->
@extends('layouts.form')

@section('title', 'Edit Specialty')

@section('content')
  <x-forms.update-form :route="'/specialties/update/' . $specialties->id" :data="['Name', 'Location Departament']"/>
@endsection