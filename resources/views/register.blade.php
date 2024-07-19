<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <center>
        <h1>User Registration Form</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <table>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name" value="{{ old('name') }}" required />
                    </td>
                </tr>
                @error("name")
                <tr>
                    <td>&nbsp;</td>
                    <td class="err">{{ $message }}</td>
                </tr>
                @enderror
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="email" value="{{ old('email') }}" required />
                    </td>
                </tr>
                @error("email")
                <tr>
                    <td>&nbsp;</td>
                    <td class="err">{{ $message }}</td>
                </tr>
                @enderror
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" required />
                    </td>
                </tr>
                @error("password")
                <tr>
                    <td>&nbsp;</td>
                    <td class="err">{{ $message }}</td>
                </tr>
                @enderror
                <tr>
                    <td id="submit-row" colspan="2"><input type="submit" value="SUBMIT" /></td>
                </tr>
            </table>
            <p>Already Registered? <a href="{{ route('loginpage') }}">Login</a></p>
        </form>
    </center>
</body>

</html>