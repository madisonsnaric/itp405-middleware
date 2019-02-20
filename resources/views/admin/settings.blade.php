@extends('layout')

@section('title', 'Settings')

@section('main')
  <h1>Settings</h1>
  <form method="post">
    @csrf
    <div class="form-group">
      <label for="maintenance">Maintenace</label>
      <input type="checkbox" id="maintenance" name="maintenance" class="form-control">
    </div>
    <input type="submit" value="Login" class="btn btn-primary">
  </form>
@endsection