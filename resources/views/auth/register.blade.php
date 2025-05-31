@extends('layouts.app')
@section('title', 'Register')


@section('content')

<form action="{{route('register.post')}}" method="post">

@csrf

<div class="container mt-5">
    <div class="mb-3">
      <label for="startUp" class="form-label">Start Up Name</label>
      <input type="text" class="form-control" id="startUp" name="startUp"  value="{{ old('startUp') }}" placeholder="Enter Start Up Name">
          @error('startUp')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="mb-3">
      <label for="founderName" class="form-label">Founder Name</label>
      <input type="text" class="form-control" id="founderName" name="founderName" value="{{ old('founderName') }}"  placeholder="Enter the Founder Name">
          @error('founderName')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"  placeholder="Enter Email Address">
          @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"  placeholder="Enter Phone Number">
          @error('phone')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>

    

     <div class="mb-3">
      <label for="website" class="form-label">Website</label>
      <input type="text" class="form-control" id="website" name="website" value="{{ old('website') }}"  placeholder="Enter Website">
          @error('website')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>

    <div class="mb-3">

    <select class="form-select" name="sector" aria-label="Default select example">
      <option  value="" selected>Select Sector</option>
      <option value="HealthTech">HealthTech</option>
      <option value="EdTech">EdTech</option>
      <option value="FinTech">FinTech</option>
      <option value="AgriTech">AgriTech</option>
    </select>
        @error('sector')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>  

    <div class="mb-3">
      <label for="formFile" class="form-label">File Upload</label>
      <input class="form-control" type="file" id="formFile">
      
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>

    
</div>
    

</form>