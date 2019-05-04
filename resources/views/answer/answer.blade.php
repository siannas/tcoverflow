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
        p.voter{
            font-size: 50px;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="post-layout row">
        <div class="votecell col-auto text-center" style="margin-left: 20px;">
            <p class="voter">0</p>
            <p>voter</p>
        </div>
        <div class="postcell col">
            <div id=content></div>
        </div>
    </div>
</body>
<script src="{{ asset('js/marked.js') }}"></script>
<script>
document.getElementById('content').innerHTML =
      marked('`conio.h` questions usually ask about `getch`, which corresponds roughly to the upper-level (curses) `getch`. However most of `conio.h` is lower-level, like this, and would be done using terminfo, e.g.\n\n[link](/home), tigetstr, tparm, tputs, using "civis" (cursor-invisible).\n\nand "cup" (cursor-position). Those functions are defined via <term.h>. Likely the program uses other features (and there are no useful tutorials on porting from conio.h to curses). In curses, the mentioned features would be curs_set and move. Further reading (terminfo): curses interfaces to terminfo database terminfo - terminal capability data base.');
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>