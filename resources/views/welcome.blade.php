@if (session('success'))
<h1 style="background-color: green ; color:white"> logged in successfully</h1>

@endif

<h1>well come {{ session('username') }}<h1>
    <a href="about">About us</a>  
      <a href="contact">contact us</a>
      <form action="logout" method="post">
        @csrf
        <input type="submit" value="logout">
      </form>