<!-- Edit Nurse Template -->
@extends('layouts.form')

@section('title', 'Edit Nurse')

@section('content')
  <x-forms.update-form :route="'/nurses/update/' . $nurses->id" :data="['DNI', 'Name', 'Gender', 'Phone']"/>
@endsection
