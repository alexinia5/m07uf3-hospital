<!-- Edit Doctor Template -->
@extends('layouts.form')

@section('title', 'Edit Doctor')

@section('content')
  <x-forms.update-form :route="'/doctors/update/' . $doctors->id" :data="['DNI', 'Name', 'Gender', 'Phone', 'Position', 'specialty_id']"/>
@endsection