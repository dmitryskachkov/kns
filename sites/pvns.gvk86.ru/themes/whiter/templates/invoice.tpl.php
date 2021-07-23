<!doctype html>
<html>
<head>
    <title>Счет на оплату</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        body { width: 210mm; margin-left: auto; margin-right: auto; border: 1px #efefef solid; font-size: 11pt;}
        table.invoice_bank_rekv { border-collapse: collapse; border: 1px solid; }
        table.invoice_bank_rekv > tbody > tr > td, table.invoice_bank_rekv > tr > td { border: 1px solid; }
        table.invoice_items { border: 1px solid; border-collapse: collapse;}
        table.invoice_items td, table.invoice_items th { border: 1px solid;}
    </style>
</head>
<body>


<img src="\sites\all\themes\la\images\invoice-logo.PNG" width="20%" height="auto" style="float: left">
<table width="80%" cellpadding="2" cellspacing="2" class="invoice_bank_rekv">
    <tr>
        <td colspan="2" rowspan="2" style="min-height:13mm; width: 105mm;">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="height: 13mm;">
                <tr>
                    <td valign="top">
                        <div>ЗАПАДНО-СИБИРСКОЕ ОТДЕЛЕНИЕ№8647 ПАО СБЕРБАНК г. Тюмемнь</div>
                    </td>
                </tr>
                <tr>
                    <td valign="bottom" style="height: 3mm;">
                        <div style="font-size:10pt;">Банк получателя        </div>
                    </td>
                </tr>
            </table>
        </td>
        <td style="min-height:7mm;height:auto; width: 25mm;">
            <div>БИK</div>
        </td>
        <td rowspan="2" style="vertical-align: top; width: 60mm;">
            <div style=" height: 7mm; line-height: 7mm; vertical-align: middle;">047102651</div>
            <div>30101810800000000651</div>
        </td>
    </tr>
    <tr>
        <td style="width: 25mm;">
            <div>Сч. №</div>
        </td>
    </tr>
    <tr>
        <td style="min-height:6mm; height:auto; width: 50mm;">
            <div>ИНН 8602016725</div>
        </td>
        <td style="min-height:6mm; height:auto; width: 55mm;">
            <div>КПП 860201001</div>
        </td>
        <td rowspan="2" style="min-height:19mm; height:auto; vertical-align: top; width: 25mm;">
            <div>Сч. №</div>
        </td>
        <td rowspan="2" style="min-height:19mm; height:auto; vertical-align: top; width: 60mm;">
            <div>40602810967170100013</div>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="min-height:13mm; height:auto;">

            <table border="0" cellpadding="0" cellspacing="0" style="height: 13mm; width: 105mm;">
                <tr>
                    <td valign="top">
                        <div>СГМУП "Горводоканал"</div>
                    </td>
                </tr>
                <tr>
                    <td valign="bottom" style="height: 3mm;">
                        <div style="font-size: 10pt;">Получатель</div>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
<br/>

<div style="font-weight: bold; font-size: 16pt; padding-left:5px;">
    Счет № <?php print $company->company_inn . '/' . REQUEST_TIME; ?> от <?php print date('d.m.Y', REQUEST_TIME); ?></div>
<br/>

<div style="background-color:#000000; width:100%; font-size:1px; height:2px;">&nbsp;</div>

<table width="100%">
    <tr>
        <td style="width: 30mm;">
            <div style=" padding-left:2px;">Поставщик:    </div>
        </td>
        <td>
            <div style="font-weight:bold;  padding-left:2px;">
                СГМУП "Горводоканал", ИНН 9602016725, КПП 860201001, 628422, Ханты-Мансийский Автономный окргу-Югра АО, Сургут г. Аэрофлотская ул, дом №4, тел: 8(3462)550441</div>
        </td>
    </tr>
    <tr>
        <td style="width: 30mm;">
            <div style=" padding-left:2px;">Покупатель:    </div>
        </td>
        <td>
            <div style="font-weight:bold;  padding-left:2px;">
              <?php print $company->company_name; ?> | ИНН: <?php print $company->company_inn; ?> </div>
        </td>
    </tr>
</table>


<table class="invoice_items" width="100%" cellpadding="2" cellspacing="2">
    <thead>
    <tr>
        <th style="width:13mm;">№</th>
        <th style="width:20mm;">Код</th>
        <th>Товар</th>
        <th style="width:17mm;">Ед.</th>
        <th style="width:27mm;">Цена</th>
        <th style="width:27mm;">Сумма</th>
    </tr>
    </thead>
    <tbody >
    <tr>
        <th style="width:13mm;">1</th>
        <th style="width:20mm;">W</th>
        <th>Оплата по договору <?php print $contract; ?></th>
        <th style="width:17mm;">руб</th>
        <th style="width:27mm;"><?php print $amount; ?></th>
        <th style="width:27mm;"><?php print $amount; ?></th>
    </tr>
    </tbody>
</table>

<table border="0" width="100%" cellpadding="1" cellspacing="1">
    <tr>
        <td></td>
        <td style="width:27mm; font-weight:bold;  text-align:right;">Итого:</td>
        <td style="width:27mm; font-weight:bold;  text-align:right;"><?php print (float)$amount / 100 * 80; ?></td>
    </tr>
    <tr>
        <td></td>
        <td style="width:27mm; font-weight:bold;  text-align:right;">Сумма НДС:</td>
        <td style="width:27mm; font-weight:bold;  text-align:right;"><?php print (float)$amount / 100 * 20; ?></td>
    </tr>
    <tr>
        <td></td>
        <td style="width:27mm; font-weight:bold;  text-align:right;">Всего к оплате:</td>
        <td style="width:27mm; font-weight:bold;  text-align:right;"><?php print $amount; ?></td>
    </tr>
</table>

<br />
<div>
Всего наименований 1 на сумму <?php print $amount; ?> рублей.<br />
</div>
<br /><br />
<div style="background-color:#000000; width:100%; font-size:1px; height:2px;">&nbsp;</div>
<br/>
<table style="width: 100%">
    <tr style="vertical-align: top">
        <td>
            <div>Начальник ОФКиПДР_______________ Новожилова К.Ю.</div>
            <p style="font-size: 9px">Приказ 352 от 05.04.2018</p>
            <div style="width: 85mm;">М.П.</div>
        </td>
        <td>
            <div>Бухгалтер ______________________ Пхакадзе Л.К.</div>

        </td>
    </tr>
</table>
<br/><br/><br/>
<br/>





</body>
</html>
