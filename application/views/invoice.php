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
            border: 1px solid #000000;
            margin-bottom: 5px;
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
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

        .custom-table th {
            padding: 8px;
            text-align: center;
        }

        .custom-table td {
            background-color: #ffffff;
            padding: 8px;
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

    <h1 style="margin-left:40%; margin-top: 30px; color:#0056A9;">INVOICE</h1>
    <table class="w-full margin-top" style="margin-bottom: 40px;">
        <tr>
            <td class="left">
                <table>
                    <tr>
                        <td style="font-weight: bold;">CV. LOGAM INTI MULIA</td>
                    </tr>
                    <tr>
                        <td>Perum Cipta Graha Asri D/9</td>
                    </tr>
                    <tr>
                        <td>JL. Sultan Agung Kel. Purutrejo, Kec Puworejo</td>
                    </tr>
                    <tr>
                        <td>Pasuruan 67117<< /td>
                    </tr>
                </table>
            </td>
            <td class="right">
                <table>
                    <tr>
                        <td>Invoice No</td>
                        <td>: 0123/MBA‐SBY/IX/2022</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>: 16 September 2022</td>
                    </tr>
                    <tr>
                        <td>Po No</td>
                        <td>:</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table class="custom-table">
        <thead>
            <tr>
                <th scope="col" rowspan="2">No</th>
                <th scope="col" rowspan="2">Uraian</th>
                <th scope="col" rowspan="2">Jumlah</th>
                <th scope="col" id="p" headers="i r">Harga Satuan</th>
                <th scope="col" id="p" headers="i r">Total Harga</th>
            </tr>
            <tr>
                <th scope="col" id="r" headers="p">(Rp)</th>
                <th scope="col" id="r" headers="p">(Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>TCW097 2xTL‐D36W HFS 220V 50Hz + TLLED16W 2100lm
                    6500K Panasonic
                </td>
                <td>6 Set</td>
                <td>1.370.000</td>
                <td>8.220.000</td>
            </tr>

            <tr>
                <td colspan="3" class="no-border"></td>
                <td>Total</td>
                <td>8.220.000</td>
            </tr>

            <tr>
                <td colspan="3" class="no-border"></td>
                <td>Total terbayar</td>
                <td>8.220.000</td>
            </tr>
            <tr style="font-weight: bold;">
                <td colspan="5" class="no-border">Terbilang : ( Delapan juta dua ratus dua puluh ribu rupiah )</td>
            </tr>
        </tbody>
    </table>
    <div style="width: 70%; font-weight:bold;">Mohon pembayaran dikirimkan melalui T/T ke PT. MANDIRI BERKAH AMERTA, di Bank BCA
        KCP Kapas Krampung. Rekening No. (IDR) 101740900</div>

    <div class="margin-top" style="font-weight:bold;">Terima kasih atas perhatian dan kerjasamanya</div>

    <div class="margin-top">
        <table class="w-full" style="text-align: start;">
            <tr>
                <td>
                    <div>Hormat Kami</div>
                    <div style="margin-top: 20px;">
                        <img src="<?= base_url('assets/img/ttd.png'); ?>" alt="ttd" style="height: 100px;" />
                        <div style="font-weight: bold; text-decoration: underline;">M. Imam Effendi</div>
                        <div>Direktur</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>