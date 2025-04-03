<!-- Create Doctor Template -->
@extends('layouts.form')

@section('title', 'Create Doctor')

@section('content')
  <x-forms.create-form :route="'/doctors/store'" :data="['DNI', 'Gender', 'Name', 'Phone', 'Position', 'specialty_id']"/>
@endsection