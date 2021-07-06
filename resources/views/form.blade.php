@extends('layout')
@section('title', isset($user)? 'Update user '. $user->name : 'Create user')
@section('content')

    <a type="button" class="btn btn-secondary" href="{{route('users.index')}}">Back to users</a>
<form method="POST"
      @if(isset ($user))
      action = "{{route('users.update', $user)}}"
      @else
      action="{{route('users.store')}}"
      @endif
      class = "mt-3" >
    @csrf
    @if(isset($user))
        @method('PUT')
    @endif
    <div class="row">
        <div class="col">
            <input name="name"
                   value="{{ old('name', isset($user) ? $user->name : null) }}"
                   type="text" class="form-control" placeholder="Name" aria-label="name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <input type="text" name="email"
                   value = "{{ old('email', isset($user) ? $user->email : null) }}"
                   class="form-control" placeholder="Email" aria-label="email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </div>
    </div>
</form>
@endsection
