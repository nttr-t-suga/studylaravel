<!doctype html>
<html lang="{{ app()->getLocale() }}">
<style>
            html, body {
                background-color: #ffdddd;
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
    <p>
      <div class="type">
        POST Pattern1
      </div>
     
      thank you for the POST! <br>
      concents inputted is 
    </p> 
    <div class="send">
      {{$data}}
    </div>  
  </body>
</html>