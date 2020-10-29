<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>edit</title>
        <link rel="stylesheet" href="../../css/styles.css" type="text/css" />
    </head>
    <body>
        <h1 id="titulo">edit: {{ $name }}</h1>
        <div id="contentEdit">
            <form id="formuEdit" action="{{ url('ticket/' . $id) }}" method="post">
                @method('put')
                @csrf
                <input type="text"   name=""      value="{{ $id    }}" readonly/>
                <input type="text"   name="name"  value="{{ $name  }}"/>
                <input type="number" name="price" value="{{ $price }}"/>
                <input type="date"   name="date"  value="{{ $date  }}"/>
                <input type="time"   name="time"  value="{{ $time  }}"/>
                <input type="submit" value="edit"/>
            </form>
            <a class="botones" href="{{ url('ticket') }}">index</a>
            <a class="botones" href="{{ url('ticket/' . $id) }}">show</a>
            <!--<form action="{{ url('ticket/' . $id) }}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="destroy"/>
            </form>-->
            <a class="botones" href="{{ url('ticket/' .  $id . '/delete') }}">delete antiguo</a>
            <a class="botones" id="enlaceBorrar" href="#">delete javascript</a>
            <form id="formDelete" action="{{ url('ticket/' . $id) }}" method="post">
                @method('delete')
                @csrf
            </form>
        </div>
        <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
    </body>
</html>