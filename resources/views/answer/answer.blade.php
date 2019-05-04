<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style>
        a {
            color: #005999;
        }

        code,
        pre {
            background-color: #eff0f1;
        }

        a:hover {
            color: #07C;
        }

        pre {
            white-space: pre-line;
        }

        p.voter {
            font-size: 50px;
            margin-bottom: 0;
        }

        span.tag {
            color: #fff;
            background-color: #007bff;
        }

        .p-15 {
            padding: 15px;
        }

        .p-10 {
            padding: 10px;
        }

        .p-0 {
            padding: 0px;
        }

        .mb-1 {
            clear: both;
            margin-bottom: 1em;
            border-bottom: 1px solid #e4e6e8;
        }

        .mt-1 {
            clear: both;
            margin-top: 1em;
            border-top: 1px solid #e4e6e8;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .list-no-style {
            list-style: none;
            list-style-type: none;
        }

        .komen {
            margin: 0;
            padding-left: 20pt;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="question-header" class="p-15 mb-1">
            <h2>'Porting' conio.h written code to curses.h</h2>
        </div>
        <div id="question-view">
            <div class="post-layout row p-10">
                <div class="votecell col-auto text-center" style="margin-left: 20px;">
                    <i class="fas fa-angle-up icon-7x"></i>
                    <p class="voter">0</p>
                    <p>voter</p>
                    <i class="fas fa-angle-down icon-3x"></i>
                </div>
                <div class="postcell col">
                    <div id="content"></div>
                    <div class="tags m-b-20">
                        <span class="badge tag">javascript</span>
                        <span class="badge tag">laravel</span>
                    </div>
                    <ul class="list-no-style p-0 mt-1">
                        <li class="mb-1 komen" id="komen"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="answer-header" class="p-15 mb-1">
            <h5>1 Answer</h5>
        </div>
        <div id="answer-view">
            <div class="post-layout row p-10">
                <div class="votecell col-auto text-center" style="margin-left: 20px;">
                    <i class="fas fa-angle-up icon-7x"></i>
                    <p class="voter">0</p>
                    <p>voter</p>
                    <i class="fas fa-angle-down icon-3x"></i>
                </div>
                <div class="postcell col">
                    <div id="content2"></div>
                    <div class="tags m-b-20">
                        <span class="badge tag">javascript</span>
                        <span class="badge tag">laravel</span>
                    </div>
                    <ul class="list-no-style p-0 mt-1">
                        <li class="mb-1 komen" id="komen2"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/marked.js') }}"></script>
<script>
    var content = marked('`conio.h` questions usually ask about `getch`, which corresponds roughly to the upper-level (curses) `getch`. However most of `conio.h` is lower-level, like this, and would be done using terminfo, e.g.\n\n[link](/home), tigetstr, tparm, tputs, using "civis" (cursor-invisible).\n\nand "cup" (cursor-position). Those functions are defined via <term.h>. Likely the program uses other features (and there are no useful tutorials on porting from conio.h to curses). In curses, the mentioned features would be curs_set and move. Further reading (terminfo): curses interfaces to terminfo database terminfo - terminal capability data base.');
    document.getElementById('content').innerHTML = content;
    document.getElementById('content2').innerHTML = content;

    var komen = marked('[What is the problem ?](/home)');
    document.getElementById('komen').innerHTML = komen;
    document.getElementById('komen2').innerHTML = komen;
        
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>