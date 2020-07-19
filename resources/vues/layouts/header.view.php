<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet CRM</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            margin-top: 1rem;
            width: 70%;
        }

        form label {
            width: 100%;
            display: block;
        }

        form label span {
            margin-right: 1rem;
        }

        form label input {
            width: 100%;
        }

        form label input[type="text"],
        form label input[type="email"] {
            height: 2.3rem;
            line-height: 2rem;
        }

        form label:not(:first-of-type) {
            margin-top: 1rem;
        }

        form input[type="submit"] {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
