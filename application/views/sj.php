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
            width: 70%;
            border-collapse: collapse;
            margin: 0 auto 20px;
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
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
            margin-top: 3rem;
        }

        .custom-table th {
            padding: 8px;
            text-align: center;
        }

        .signature-line {
            border-bottom: 2px solid #000;
            width: 100px;
            margin: 10px auto;
            height: 1px;
        }

        .signature-box {
            text-align: center;
            margin-top: 40px;
            width: 50%;
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

    <div class="margin-top" style="margin-bottom: 40px;">
        <table class="w-full">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td style="font-weight: bold; font-size: large;">SURAT JALAN</td>
                        </tr>
                        <tr>
                            <td>NO : 0150/MBA-SBY/XII/2022</td>
                        </tr>
                        <tr>
                            <td>PO NO : 016/BK-P/UPN/DES/2022</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>Surabaya, 28 Desember 2022</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table class="w-full" style="margin-bottom: 20px;">
            <tr>
                <td style="width: 50%; vertical-align: top;">
                    <table>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td style="font-weight: bold;">CV. BRILIAN KRISDATAMA</td>
                        </tr>
                        <tr>
                            <td>JL. Pramuka Raya Kav. 150</td>
                        </tr>
                        <tr>
                            <td>Kel. Utan Kayu Utara, Kec. Matraman</td>
                        </tr>
                        <tr>
                            <td>Jakarta Timur</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table class="w-full" style="margin-bottom: 20px;">
            <tr>
                <td style="width: 50%; vertical-align: top;">
                    <table>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>Alamat Kirim :</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PT. Citra Prasasti Konsorindo</td>
                        </tr>
                        <tr>
                            <td>Kampus UPN Veteran Surabaya</td>
                        </tr>
                        <tr>
                            <td>JL. Rungkut Madya No.1 Gn Anyar</td>
                        </tr>
                        <tr>
                            <td>Surabaya - Jawa Timur 60294</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table class="w-full">
            <tr>
                <td style="width: 50%; vertical-align: top;">
                    <table>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>Up : Pak Fadel</td>
                        </tr>
                        <tr>
                            <td>0812-8344-4659</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <table class="custom-table margin-top">
        <thead>
            <tr class="head-table" style="background-color: #E7E6E6;">
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td> AC Wall Mounted kap.12.000 Btuh</td>
                <td>1 Unit</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td> AC Wall Mounted kap.7.000 Btuh</td>
                <td>1 Unit</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td> AC Wall Mounted kap.5.000 Btuh</td>
                <td>23 Unit</td>
            </tr>
        </tbody>
    </table>

    <div class="margin-top">
        <table class="w-full margin-top">
            <tr>
                <td class="signature-box">
                    <div>Penerima</div>
                    <div class="signature-line" style="height: 100px;"></div>
                </td>
                <td class="signature-box">
                    <div>Yang Menyerahkan</div>
                    <div class="signature-line" style="height: 100px;"></div>
                </td>
            </tr>
        </table>
    </div>

    <table class="w-full margin-top">
        <tr>
            <td style="text-align: center; vertical-align: middle; font-size: 8; color: #031DA8;">Authorized Dealer for Panasonic Lighting</td>
        </tr>
    </table>
</body>

</html>