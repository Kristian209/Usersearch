<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <script type="text/javascript">
      function showSuggestion(str){
          if(str.length == 0){
      document.getElementById('output').innerHTML = '';
    }
    else{
           var xmlHTTP = new XMLHttpRequest();
        xmlHTTP.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById('output').innerHTML = this.responseText;
          }
        }
        xmlHTTP.open("GET", "suggestions.php?q="+str, true);
        xmlHTTP.send();
      }
    }
    </script>
    <meta charset="utf-8">
    <title>User Search</title>
  </head>
  <body>

    <div class="container">
     <h1>Search Users</h1>
      <form>
        Search User : <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
      </form>
      <p>Suggestions: <span id="output" stye="font-weight:bold"></span></p>
    </div>

  </body>
</html>
