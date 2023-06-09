<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Invoice</title>
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css')}}">
    <style>
        table { border-collapse: collapse;}
        body {
            font-family:Helvetica, Arial, sans-serif;
        }
        p{
            font-size:14px;
            line-height:150%;
        }
    </style>
</head>
<body>
<section class="container">
    <div class="col-md-12">
        <table width="100%">
            <tr align="center" style="height: 20px">
                <td width="20%"></td>
                <td width="60%">
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td width="60%">
                    @yield('content')
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td width="60%">
                    <table width="100%">
                        <tr>
                        </tr>
                    </table>
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td width="60%" align="center">
                    <br>
{{--                    <small class="text-muted" style="font-size: 12px">© SbcMedic - Todos los derechos reservados</small>--}}
                </td>
                <td width="20%"></td>
            </tr>
        </table>
    </div>
</section>
</body>
</html>
