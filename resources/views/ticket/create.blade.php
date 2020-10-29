<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>create</title>
        <link rel="stylesheet" href="../css/styles.css" type="text/css" />
    </head>
    <body>
        <h1 id="titulo">Create</h1>
        <div id="contentCreate">
            <form action="{{ url('ticket') }}" method="post">
                @csrf <!-- seguridad -->
                <input type="text"   name=""      value="#" readonly/>
                <input type="text"   name="name"  value=""/>
                <input type="number" name="price" value=""/>
                <input type="date"   name="date"  value=""/>
                <input type="time"   name="time"  value=""/>
                <input type="submit" value="create"/>
            </form>
        </div>
        <div id="bottomCreate">
            <a class="botones" href="{{ url('ticket') }}">index</a>
        </div>
    </body>
</html>