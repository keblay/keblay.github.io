<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau contact !</title>
</head>

<body>
    <h2>Une nouveau message a été envoyé depuis le site vitrine.</h2>
    <p><strong>Nom:</strong> {{ $details['name'] }}</p>
    <p><strong>Téléphone:</strong> {{ $details['phone'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Société:</strong> {{ $details['company'] }}</p>
    <p><strong>Message:</strong> {{ $details['message'] }}</p>
</body>

</html>
