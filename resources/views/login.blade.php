<x-header data="contct heder" />
<h2>login</h2>
<form action="login" method="post">
    @csrf
    {{-- @if ($errors->any())
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
      
  @endforeach
    @endif --}}
    
    <input type="text" name="username" placeholder="eneter user name"> <br>
    <span style="color: red">@error('username'){{ $message }}@enderror</span> <br>
    <input type="password" name="password" placeholder="eneter user pssword"> <br> 
    <span style="color: red">@error('password'){{ $message }}@enderror</span> <br>
    <input type="submit" value="login">
</form>