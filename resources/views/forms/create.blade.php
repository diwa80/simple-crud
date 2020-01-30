@extends('layout')

@section('content')


<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #eee;
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
  color: #222;
}

#form {
  max-width: 700px;
  padding: 2rem;
  box-sizing: border-box;
}

.form-field {
  display: flex;
  margin: 0 0 1rem 0;
}
label, input {
  width: 70%;
  padding: 0.5rem;
  box-sizing: border-box;
  justify-content: space-between;
  font-size: 1.1rem;
}
label {
  text-align: right;
  width: 30%;
}
input {
  border: 2px solid #aaa;
  border-radius: 2px;
}
</style>



<form method="post" action="{{route('forms.store')}}" id="form" class="validate">
  <div class="form-field">
  @csrf
    <label for="full-name">Full Name</label>
    <input type="text" name="name" id="full-name" placeholder="Enter Name" />
  </div>
  <div class="form-field">
    <label for="email-input">Email</label>
    <input type="email" name="email" id="email-input" placeholder="example@domain.com" />
  </div>
  <div class="form-field">
    <label for="password-input">Address</label>
    <input type="text" name="password" id="password-input" />
  </div>
  <div class="form-field">
    <label for=""></label>
    <input type="submit" value="Save" >
  </div>
</form>