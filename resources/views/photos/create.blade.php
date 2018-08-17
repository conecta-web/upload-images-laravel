<h1>Upload de imagens</h1>

<form action="/photos" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="text" name="title" value="imagem">
    <input type="file" name="url">
    <input type="submit" value="enviar">
</form>

