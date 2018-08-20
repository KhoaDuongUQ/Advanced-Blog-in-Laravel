@extends('layouts.app')

@section('content')
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
      <div class="card">
        <div class="card-content">

          <h1 class="title"> Log In </h1>

          <form class="" action="{{ route('login') }}" method="post" role="form">
            {{ csrf_field() }}
            <div class="field">
              <label for="email" class="label"> Email Address </label>
              <p class="control has-icons-left">
                <input class="input {{ $errors->has('email')? 'is-danger' : '' }}" type="email" name='email' id='email' placeholder="Email" value="{{ old('email') }}">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger"> {{ $errors->first('email') }}</p>
              @endif
            </div>

            <div class="field">
              <label for="password" class="label"> Password </label>
              <p class="control has-icons-left">
                <input class="input {{ $errors->has('password')? 'is-danger' : '' }}" type="password" name="password" id='password' placeholder="Password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger"> {{ $errors->first('password') }}</p>
              @endif
            </div>

            <b-checkbox name="remember" class="m-t-20"> Remember me </b-checkbox>
            <button class="button is-primary is-outlined is-fullwidth m-t-30"> Login </button>
            <a class="button is-info is-small is-outlined m-t-10" href="{{ route('password.request') }}"> Forgot Your Password? </a>
          </form>


        </div>
      </div>
    </div>
  </div>
@endsection
