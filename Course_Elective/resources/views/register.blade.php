<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/register.css') }}">
    <title></title>
</head>
<body>
    <div class="pf_top">
        <div class="logo">ITC | SMIS</div>
        <div class="admins">
            <form>
                <select name = "dropdown-toggle">
                    <option value = "taj" selected>Admin Islator</option>
                    <option value = "china">Dashboard</option>
                    <option value = "chirst">Change Password</option>
                    <option value = "machu">Logout</option>
                </select>
            </form>
        </div>
    </div>
    <form class="form" action="{{ route('register_submit') }}" method="POST">
      @csrf
      <p class="title">Register </p>
      <p class="message">Signup now and get full access to our app. </p>
      <label>
        <input  placeholder="name" name="name" type="text" class="input" value="{{ old('name') }}">
        @error('name')
          <span style="color: red">{{ $message }}</span>
        @enderror
      </label> 
      <label>
          <input  placeholder="email" name="email" type="email" class="input" value="{{ old('email') }}">
          @error('email')
            <span style="color: red">{{ $message }}</span>
          @enderror
      </label> 
      <label>
          <input  placeholder="password" name="password" type="password" class="input" value="{{ old('password') }}">
          @error('password')
            <span style="color: red">{{ $message }}</span>
          @enderror
      </label>
      <label>
          <input  placeholder="comfirm password" name="comfirm_password" type="password" class="input" value="{{ old('comfirm_password') }}">
          @error('comfirm_password')
            <span style="color: red">{{ $message }}</span>
          @enderror
      </label>
      <button class="submit" type="submit">Submit</button>
      <p class="signin">Already have an acount ? <a href="{{ route("login") }}">Login</a> </p>
  </form>
</body>
</html>