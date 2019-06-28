<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <body>
      <form method="post" action="rpost">
      {{ csrf_field() }}
              POST<br>
                    
            <input type="text" name="data" />
            <input type="submit" value="post" /> 
        </form>
        <form method="get" action="rpost">
              GET<br>
                    
            <input type="text" name="data" />
            <input type="submit" value="get" /> 
        </form>

    </body>
</html>