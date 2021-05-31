<!DOCTYPE html>
<html>
<head>
    <title>Becker Kúria</title>
</head>
<body>
    <p>Új üzenet érkezett a beckerkuria.hu-ról!</p>
    <p>
        <strong>Név:</strong> {{ $mail['full_name'] }}
    </p>
    <p>
        <strong>Email:</strong> {{ $mail['email'] }}
    </p>
    <p>
        <strong>Telefonszám:</strong> {{ $mail['phone'] }}
    </p>
    <p>
        <strong>Üzenet:</strong> {{ $mail['message'] }}
    </p>
</body>
</html>
