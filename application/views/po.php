<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        body {
            font-size: 10px;
            font-family: Arial, sans-serif;
        }

        .w-full {
            width: 100%;
        }

        .margin-top {
            margin-top: 1.25rem;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #000000;
            margin-bottom: 5px;
        }

        .custom-table th {
            border: 2px solid #000000;
            padding: 2px;
            text-align: left;
        }

        .half-table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #000000;
            margin-bottom: 5px;
        }

        .half-table th {
            border: 2px solid #000000;
            padding: 2px;
            text-align: left;
        }

        .sup-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5px;
        }

        .sup-table th,
        .sup-table td {
            border: 2px solid #000000;
            padding: 2px;
            text-align: center;
        }

        .sup-table td[colspan].no-border {
            border: none;
        }

        .table-header {
            background-color: #E7E6E6;
            font-weight: bold;
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

    <table class="custom-table margin-top">
        <tr>
            <th style="text-align: center; font-size: 10px; background-color: #E7E6E6;">PURCHASE ORDER</th>
        </tr>
    </table>

    <table class="custom-table margin-top">
        <thead style="border: 2px solid #000000; padding: 4px; background-color: #E7E6E6;">
            <tr>
                <td>PO. Number</td>
                <td>: 053/MBA-SBY/I/2023</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Date</td>
                <td>: 4 Januari 2023</td>
            </tr>
            <tr>
                <td>Customer</td>
                <td>: PT. SIER</td>
            </tr>
            <tr>
                <td>Currency</td>
                <td>: IDR (Rupiah)</td>
            </tr>
            <tr>
                <td>Bill to address</td>
                <td>: JL. Rungkut Industry Raya No. 10 SBY (Gedung perkantoran SIER 3th Floor)</td>
            </tr>
            <tr>
                <td>Term Of Payment</td>
                <td>: DP30% sisa pembayaran 30 hari setelah barang diterima</td>
            </tr>
        </tbody>
    </table>

    <table class="w-full margin-top">
        <tr>
            <!-- Supplier -->
            <td style="width: 50%; vertical-align: top;">
                <table class="half-table">
                    <thead style="border: 2px solid #000000; padding: 4px; background-color: #E7E6E6;">
                        <tr>
                            <td colspan="2">Supplier</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">PT. PANOSONIC GOBEL LIFE SOLUTIONS SALES INDONESIA</td>
                        </tr>
                        <tr>
                            <td colspan="2">Summitmas I 8th Floor</td>
                        </tr>
                        <tr>
                            <td colspan="2">JL. Jend. Sudirman Kav. 61-62, Jakarta 12190, Indonesia</td>
                        </tr>
                        <tr>
                            <td colspan="2">-</td>
                        </tr>
                        <tr>
                            <td colspan="2">Contact Person : Yth. Bp. Denny ( +62 813-3672-9221 )</td>
                        </tr>
                    </tbody>
                </table>
            </td>

            <!-- SHIP to ADDRESS -->
            <td style="width: 50%; vertical-align: top;">
                <table class="half-table">
                    <thead style="border: 2px solid #000000; padding: 4px; background-color: #E7E6E6;">
                        <tr>
                            <td colspan="2">SHIP to ADDRESS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">JL. Rungkut Industry Raya No. 10 Surabaya</td>
                        </tr>
                        <tr>
                            <td colspan="2">Gedung perkantoran SIER 3th Floor</td>
                        </tr>
                        <tr>
                            <td colspan="2">-</td>
                        </tr>
                        <tr>
                            <td colspan="2">-</td>
                        </tr>
                        <tr>
                            <td colspan="2">Contact Person : M. Imam Effendi ( +62 812-3284-317 )</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>

    <div class="margin-top" style="margin-left: 18px;">Please supply the following items :</div>
    <table class="sup-table" style="margin-bottom: -100px;">
        <thead style="border: 2px solid #000000; padding: 4px; background-color: #E7E6E6;">
            <tr>
                <th>No</th>
                <th>Description</th>
                <th>Item Code</th>
                <th>Qty</th>
                <th>UOM</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>LED Floodlight</td>
                <td>NNP35939K031</td>
                <td>8</td>
                <td>Pcs</td>
                <td>5.535.000</td>
                <td>44.280.000</td>
            </tr>
            <tr style="border: 2px solid #000000; padding: 4px; background-color: #E7E6E6;">
                <td colspan="7">FINISH ORDER</td>
            </tr>
            <tr>
                <td colspan="5" class="no-border"></td>
                <td>Sub Total</td>
                <td>44.280.000</td>
            </tr>
            <tr>
                <td colspan="5" class="no-border"></td>
                <td>Discount</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="5" class="no-border"></td>
                <td>Total</td>
                <td>44.280.000</td>
            </tr>
            <tr>
                <td colspan="5" class="no-border"></td>
                <td>VAT (11%)</td>
                <td>4.870.800</td>
            </tr>
            <tr>
                <td colspan="5" class="no-border"></td>
                <td style="background-color: #E7E6E6;">Grand Total</td>
                <td style="background-color: #E7E6E6;">49.150.800</td>
            </tr>
        </tbody>
    </table>
    <table class="margin-top" style="width: 50%; vertical-align: top;">
        <tr>
            <td style="width: 60%; vertical-align: top;">
                <table class="sup-table">
                    <thead style="border: 2px solid #000000; padding: 4px; font-weight: bold; background-color: #E7E6E6;">
                        <tr>
                            <th>Prepared By</th>
                            <th>Checked By</th>
                            <th>Approved By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="<?= base_url('assets/img/ttd-prepared.jpg'); ?>" alt="ttd-prepared" style="height: 70px; width: 50%;" /></td>
                            <td><img src="<?= base_url('assets/img/ttd.png'); ?>" alt="ttd" style="height: 70px; width: 50%;" /></td>
                            <td><img src="<?= base_url('assets/img/ttd-approve.jpg'); ?>" alt="ttd-approve" style="height: 70px; width: 50%;" /></td>
                        </tr>
                        <tr>
                            <td>Zuan Syafa Alfafa </td>
                            <td>M. Imam Effendi</td>
                            <td>Totok Wahyudi</td>
                        </tr>
                    </tbody>
                </table>
            </td>
    </table>


    <table class="w-full margin-top">
        <tr>
            <td style="text-align: center; vertical-align: middle;">
                <img src="<?= base_url('assets/img/panasonic.jpg'); ?>" alt="panasonic" style="height: 30px; width: 30%;" />
            </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; font-size: 8; color: #031DA8;">Authorized Dealer for Panasonic Lighting</td>
        </tr>
    </table>

</body>

</html>