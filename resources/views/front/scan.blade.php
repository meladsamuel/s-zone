@extends("layouts.site")

@section("content")
    <div>
        <div style="max-width:500px;" id="reader"></div>
        <div class="col" style="padding:30px;">
            <h4 id="result">SCAN RESULT</h4>
        </div>
    </div>
@endsection
@section("script")

    <script src="{{asset("js/qr_code_scan.js")}}"></script>

    <script type="text/javascript">
        let isSend = false;

        function pickup(machine) {
            const params = new URLSearchParams(window.location.search)
            console.log(params.get('merchantRefNumber'))
            const data = {refNumber: +params.get("merchantRefNumber"), vending: machine, _token: '{{csrf_token()}}'};

            $.ajax({
                type: "POST",
                url: `/pickup`,
                data: data,
                success: function (data) {
                    console.log(data);
                    alert("take the order from machine")
                },
                error: function (data) {
                    console.log(data);
                },
            });
        }

        function onScanError(error) {
            // alert(error);
        }

        const qrCodeSuccessCallback = (machine) => {
            html5QrCode.stop().then((ignore) => {
                document.getElementById('result').innerHTML = `
                <div class="container">
<h2 class="result"> your order is preparing in machine no.${machine} </h2>
<center><h3>please waiting</h3></center>
</div>
                `;
            }).catch((err) => {
                // Stop failed, handle it.
            });
            if (!isSend) {
                isSend = true;
                pickup(machine);
            }
        };

        const html5QrCode = new Html5Qrcode("reader");
        const config = {fps: 15, qrbox: 200};
        html5QrCode.start({facingMode: "environment"}, config, qrCodeSuccessCallback, onScanError);
    </script>

@endsection
