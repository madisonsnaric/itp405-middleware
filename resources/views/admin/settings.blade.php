@extends('layout')

@section('title', 'Settings')

@section('main')
  <h1>Settings</h1>
  <form method="post">
    @csrf
    <div class="form-group">
      <label for="maintenance">Maintenance</label>
      <input type="checkbox" value="on" id="maintenance" name="maintenance" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary">
  </form>
@endsection



