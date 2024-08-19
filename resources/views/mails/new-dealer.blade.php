<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> --}}
    <style>
        body,
        p {
            font-family: 'Montserrat', sans-serif;
        }

        p {
            line-height: 1.8em;
            font-size: 14px;
        }

    </style>
</head>

<body>
    <table style=" width:100%;background:#037856;font-family: 'Montserrat', sans-serif;" cellpadding="10">
        <tr>
            <td align="center"><img src="{{ asset('images/coop-logo.png') }}" alt="Asset finance logo"></td>
        </tr>
    </table>
    <table style="width:100%;background:#037856;" cellpadding="10">
        <tr>
            <td>
                <table align="center" style="width:650px;background:#fff;font-family:'Calibri';padding: 10px 20px;">
                    <tr>
                        <td>
                            <table rules="all" style="width:100%;" cellpadding="5" align="center">
                                <tr>
                                    <td>
                                        <p align="justify">Hello,</p>
                                        <p align="justify">
                                            This is to notify you that a new dealer has been registered on the Co-op Asset Finance platform.
                                            <p>
                                                <br>
                                                <strong>Dealer Name:</strong> {{$firstName}} {{$lastName}}
                                                <br>
                                                <strong>Dealer Company Name:</strong> {{$companyName}}
                                                <br>
                                                <strong>Dealer Email & Phone:</strong> {{$phone}}
                                                <br>
                                                <strong>Dealer Location:</strong> {{$location}}
                                                <br>
                                            </p>
                                            <p> Log in to the Co-op Asset Finance platform to view the dealer's profile and approve or reject the registration.</p>
                                            <p>
                                                <br>
                                                Thank you.
                                            </p>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
