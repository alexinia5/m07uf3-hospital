<!-- Edit Patient Template -->
@extends('layouts.form')

@section('title', 'Edit Patient')

@section('content')
  <x-forms.update-form :route="'/patients/update/' . $patients->id" :data="['DNI', 'Gender', 'Name', 'Phone', 'Address', 'CP']"/>
@endsection