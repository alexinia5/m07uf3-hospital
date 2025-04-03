<!-- Create Patient Template -->
@extends('layouts.form')

@section('title', 'Create Patient')

@section('content')
  <x-forms.create-form :route="'/patients/store'" :data="['DNI', 'Gender', 'Name', 'Phone', 'Address', 'CP']"/>
@endsection