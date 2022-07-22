<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Transation</title>
</head>
<body>
    @if(session()->has('message'))
        <span style="color:green;">{{ session('message') }}</span>
    @endif
    <br>
    <form action="{{ route('make.payment') }}" method="POST">
        @csrf
        <script
        src="https://checkout.stripe.com/checkout.js"
        class="stripe-button"
        data-key="pk_test_51LOORaF2LLDWlIIZoST0175ZO2ddrgrYgtKeAi8isUOOchcqEOiJJ4UgAlDIlrdw9nNuqfB8LTGLgn2lOQhsv7rg007kU9aZTL"
        data-name="T-shirt"
        data-description="Comfortable cotton t-shirt"
        data-amount="1000"
        data-image="https://www.webappfix.com/storage/app/public/site-setting/SRBx2hTgEOaHdozWVR3hgPb3LTdEw9NwajD05FL2.png"
        data-currency="usd"
        data-label="Make Payment">
        </script>
    </form>    
</body>
</html>
