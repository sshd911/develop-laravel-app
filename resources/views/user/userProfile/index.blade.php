@extends('layouts.app')

@section('content')
    <livewire:user.user-profile.edit :attributes="$attributes" />
@endsection
