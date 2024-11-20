<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        body {
            font-size: 12px;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5px;
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
            text-align: center;
        }

        .custom-table td[colspan].no-border {
            border: none;
        }

        h6 {
            margin-bottom: 0px;
            font-size: 14px;
        }

        .w-full {
            width: 100%;
        }

        .left {
            width: 80%;
        }

        .right {
            width: 40%;
        }

        .margin-top {
            margin-top: 1.25rem;
        }
    </style>
</head>

<body>
    <table class="w-full mb-4">
        <tr>
            <td>
                <img src="<?= base_url('assets/img/kop-atas.png'); ?>" alt="kop-atas" style="height: 70px; width: 100%;" />
            </td>
        </tr>
    </table>

    <div class="margin-top" style="margin-bottom: 40px; margin-top: 50px;">
        <table class="w-full">
            <tr>
                <td>Tanggal</td>
                <td>: 18 Oktober 2022</td>
            </tr>
            <tr>
                <td>No </td>
                <td>: 0121/MBA-SBY/X/2022</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>: Penawaran Harga Lampu Philips</td>
            </tr>
        </table>
    </div>

    <div class="margin-top" style="margin-bottom: 40px;">
        <table class="w-full">
            <tr>
                <td>Kepada Yth</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">PT. Penyelesaian Masalah Property</td>
            </tr>
            <tr>
                <td>Jl. Raya Bondowoso Km 10</td>
            </tr>
            <tr>
                <td>Candijati, Kec. Arjasa</td>
            </tr>
            <tr>
                <td>Kabupaten Jember - Jawa Timur 68195</td>
            </tr>
        </table>
    </div>

    <div class="margin-top" style="font-weight: bold;">Attn . Bp. Arif Darmawan</div>

    <div class="margin-top">Dengan hormat,</div>
    <div>Sehubungan dengan permintaan Bapak / Ibu , bersama ini kami sampaikan penawaran harga sebagai berikut :</div>
    <table class="custom-table margin-top">
        <thead>
            <tr class="head-table" style="background-color: #E7E6E6;">
                <th scope="col">No</th>
                <th scope="col" style="width: 40%;">Description</th>
                <th scope="col">Item Code</th>
                <th scope="col">Qty (Pcs)</th>
                <th scope="col">Best Price</th>
                <th scope="col">Total Price (IDR)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td style="width: 40%; text-align: left;">BRP132 LED175/CW 140W 220-240V DM GM</td>
                <td>Philips</td>
                <td>1</td>
                <td>3.072.800</td>
                <td>3.072.800</td>
            </tr>
            <tr style="font-weight: bold;">
                <td colspan="4" class="no-border"></td>
                <td>Total</td>
                <td >3.072.800</td>
            </tr>
        </tbody>
    </table>

    <div class="margin-top" style="font-weight: bold;">Terms & Conditions :</div>
    <table class="w-full">
        <tr>
            <td style="text-align: right">1.</td>
            <td>Payment COD</td>
        </tr>
        <tr>
            <td style="text-align: right">2.</td>
            <td>Masa berlaku penawaran 2 minggu</td>
        </tr>
        <tr>
            <td style="text-align: right">3.</td>
            <td>Franco : Surabay</td>
        </tr>
        <tr>
            <td style="font-weight: bold; text-align: right">4.</td>
            <td style="font-weight: bold; text-decoration: underline; font-style: italic;">Delivery : Ready Stock</td>
        </tr>
    </table>

    <div class="margin-top" style="margin-top: 60px; margin-left: 30px;">
        <table class="w-full" style="text-align: start;">
            <tr>
                <td>
                    <div>Hormat Kami,</div>
                    <div>PT. MANDIRI BERKAH AMERTA</div>
                    <div style="margin-top: 20px; font-weight: bold;">
                        <div>M. Imam Effendi</div>
                        <div>08123284317</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>