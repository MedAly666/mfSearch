<!DOCTYPE html>
<html>
    <head>
        <title>mfSearch</title>
        <style>
            *{
                padding:0;
                margin:0;

                background-color:#ffffff;
            }

            .input{
                width:50%;
                height: 1cm;

                margin:auto;

                border:solid 2px #000000 ;
                border-radius: 5px ;
            }

            .input * {
                height:1cm;

                border:solid 0px ;
            }

            .input button {
                width: 1cm;
            }

            .input input {
                width: calc(100% - 1.2cm )
            }
        </style>
    </head>
    <body>
        <form method="get" action="">
            <div class="input">
                <input type="search" name="search" />
                <button>Search</button>
            </div>
        </form>
    </body>
</html>
