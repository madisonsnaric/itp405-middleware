@extends('layout')

@section('title', 'Docs')

@section('main')

<ul id="chat"></ul>

<div contenteditable="true" tabindex="0" id="document">
  Type here
</div>

<script src="../js/doc.js"></script>

@endsection