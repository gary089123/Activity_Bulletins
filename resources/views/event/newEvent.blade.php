<form action="/event/" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="begin_at" >
    <input type="submit" value="New" >
</form>
