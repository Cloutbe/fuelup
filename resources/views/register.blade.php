<form action="/register" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Daftar</button>
</form>
