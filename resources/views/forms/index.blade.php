@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  <!-- @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif -->
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Password</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($forms as $form)
        <tr>
            <td>{{$form->id}}</td>
            <td>{{$form->name}}</td>
            <td>{{$form->email}}</td>
            <td>{{$form->password}}</td>
            <td><a href="{{ route('forms.edit',$form->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <!-- <form action="{{ route('form.destroy', $form->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button> -->
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>