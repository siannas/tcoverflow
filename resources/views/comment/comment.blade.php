<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style>
        a {
            color: #005999;
        }

        code, pre {
            background-color: #eff0f1;
        }

        a:hover {
            color: #07C;
        }
        pre{
            white-space: pre-line;
        }
    </style>
</head>

<body>
    <a href=""><code>this is code</code>
    </a>
    <br>
    <code>&lt;?php&gt;</code>
    <br>
    <pre>
        <code id="code1">
        </code>
    </pre>
    <form name="form-komen" method="POST" action="{{ route('comment.store') }}">
        @csrf
        <div class="form-group">
            <label for="komen">comment</label>
            <textarea name="komentar" class="form-control" id="komen" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-1" id="submit">Submit</button>
    </form>
</body>
<script>

$( "code" ).text( "<b>Some</b>\nnew text.");
// $("button").click(alert(), function (e) { 
//     e.preventDefault();
// });
// document.getElementById("submit").addEventListener("click", function(){
//     // alert("hai");

// });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>