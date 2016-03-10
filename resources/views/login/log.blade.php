<h1>
    Post
</h1>
<meta name="csrf-token" content="{{ csrf_token() }}">
<form method="post" action="{{url('login/log')}}">
  <div>
   <label>Correo:</label>
   <input type="email" name="correo" value="{{$correo}}"/>
   </div>
   <div>
   <label>Contraseña:</label>
   <input type="password" name="contrasena" value="{{$contrasena}}"/>
   </div>
   <div>
   <button type="submit">Entrar</button>
   </div>
    
</form>