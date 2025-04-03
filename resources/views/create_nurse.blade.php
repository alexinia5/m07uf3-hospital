<!-- Create Nurse Template -->
@extends('layouts.form')

@section('title', 'Create Nurse')

@section('content')
  <x-forms.create-form :route="'/nurses/store'" :data="['DNI', 'Name', 'Gender', 'Phone']"/>
@endsection