<!DOCTYPE html>

<html>

<head>

	<title>{{ $name }}</title>
    <meta charset="utf-8"/>


    <style>

        .heading h2{
            text-align:center;
        }
        
    </style>

</head>

<body>

    <div class="heading about">

        <h2>ETAT CIVIL</h2>
        <h3>{{ $name }}</h3>
        <p>Né(e) le {{ Carbon\Carbon::parse($birthday)->format('d/m/Y ') }}</p>
        <p>Habite à {{ $city }} - {{ $address }}</p>
        <p>Email: {{ $email }}
        <p>Contact: {{ $phone }}</p>

    </div>

    <hr/>

    <div class="heading experiences">
        <h2>EXPERIENCES</h2>

    </div>



</body>

</html>