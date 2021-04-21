<html>

    <body>

        <form action="form" method="POST">
            {{ csrf_field() }}
            <input type="text" name="text">
            <input type="submit">
        </form>

    </body>

</html>
