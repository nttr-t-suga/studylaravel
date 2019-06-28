<!doctype html>
<html lang="{{ app()->getLocale() }}">
<style>
            html, body {
                background-color: #ddffdd;
                text-align: center;
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .type {
                font-size: 30px;     
            }
            .send {
                font-size: 20px;    
                color: #ff0000; 
            }
</style>
    <body>
      <div class="type">
        GET Pattern1
      </div>
    <p>thank you for the GET!<br>
    concents inputted is
    </p>   
    <div class="send">
      {{$data}}
    </div>
    </body>
</html>