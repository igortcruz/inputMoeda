<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>

    <title>Título da Página</title>
</head>

<body>
    <input id="valorPlano" type="text">
    <script src="jquery.min.js" type="text/javascript"></script>
    <script src="jquery.maskMoney.js" type="text/javascript"></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script>
        $(function() {
            $("#valorPlano").maskMoney({
                symbol: 'R$ ',
                showSymbol: false,
                thousands: '.',
                decimal: ',',
                symbolStay: true
            });
        });
    </script>
</body>

</html>