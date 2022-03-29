<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $actives = $_POST["actives"];
  $is1 = $_POST["is1"];
  $is2 = $_POST["is2"];
  $is3 = $_POST["is3"];
  $conf = $_POST["conf"];
  $integrity = $_POST["integrity"];
  $avail = $_POST["avail"];
  $letter = $_POST["letter"];
  $pk = $_POST["pk"];
  $m = $_POST["m"];
  $dsp = $_POST["dsp"];
  $coninf = $_POST["coninf"];
  $private = $_POST["private"];


  $query = "INSERT INTO tb_data VALUES('', '$actives', '$is1', '$is2', '$is3', '$conf', '$integrity', '$avail', '$letter',
   '$pk', '$m', '$dsp', '$coninf', '$private')";
  mysqli_query($conn, $query);
  echo
  "
  <script> alert('Ваши данные сохранены.'); </script>
  ";
}

?>

<html>
<head>
    <title>Заполните анкету</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <script type="text/javascript">
        function addRows() {
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length;
            var row = table.insertRow(rowCount);
            for (var i = 0; i <= cellCount; i++) {
                var cell = 'cell' + i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col' + i).innerHTML;
                cell.innerHTML = copycel;
                if (i == 122) {
                    var radioinput = document.getElementById('col12').getElementsByTagName('input');
                    for (var j = 0; j <= radioinput.length; j++) {
                        if (radioinput[j].type == 'radio') {
                            var rownum = rowCount;
                            radioinput[j].name = 'private[' + rownum + ']';
                        }
                    }
                }
            }
        }
        function deleteRows() {
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            if (rowCount > '2') {
                var row = table.deleteRow(rowCount - 1);
                rowCount--;
            } else {
                alert('Должна быть хотя бы одна строка');
                //There should be atleast one row
            }
        }
    </script>
</head>

<body>
    <h1 style="text-align: center;"> <img class="img" src="pics.png" alt="Image"></h1>
    <h2 style="text-align: center; margin-top: 2em; margin-bottom: 1em;">Анкета активов без оценки</h3>
        <form method="post" autocomplete="off">
            <table action="send.php" method="post" id="emptbl" style="border: 1px dotted black;">
                <tr style="background-color: rgb(220, 238, 255);">
                    <th style="border: 1px solid black;">Информационные активы
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>Запишите Информационный актив (информация, документ, отчет и т.п,) который является критичным для вашего структурного подразделения с точки зрения конфедециальности и т.д.</p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">ИС#1
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>Если для храниения, обработки или передачи используется информацилонная система, то необходимо выбрать из списка эту информационную систему.</p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">ИС#2
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>Если для храниения, обработки или передачи используется информацилонная система, то необходимо выбрать из списка эту информационную систему.</p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">ИС#3
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>Если для храниения, обработки или передачи используется информацилонная система, то необходимо выбрать из списка эту информационную систему.</p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">Конфедециальность
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>Уровни требований обозначаются целыми цифрами от 0 до 3:
                                    - Значение “0” – “отсутствие требований”;
                                    - Значение “1” – “низкие требования”;
                                    - Значение “2” – “средние требования”;
                                    - Значение “3” – “высокие требования”;
                                </p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">Целостность
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>
                                    - Значение “0” – “отсутствие требований”;
                                    - Значение “1” – “низкие требования”;
                                    - Значение “2” – “средние требования”;
                                    - Значение “3” – “высокие требования”;
                                </p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">Доступность
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>
                                    - Значение “0” – “отсутствие требований”;
                                    - Значение “1” – “низкие требования”;
                                    - Значение “2” – “средние требования”;
                                    - Значение “3” – “высокие требования”;
                                </p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">Представлен на бумаге</th>
                    <th style="border: 1px solid black;">Используется на ПК
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>Укажите наличие информации на персональном компьютере.</p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">Может храниться на внешних носителях</th>
                    <th style="border: 1px solid black;">Является ДСП</th>
                    <th style="border: 1px solid black;">Состоит в перечне конфиденциальной информации
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>Входит ли актив в перечень конфедециальных документов</p>
                            </details>
                        </h5>
                    </th>
                    <th style="border: 1px solid black;">В работе с активом используются личные устройства
                        <h5 style="font-style: italic; color: rgb(59, 59, 59); margin-top: 1ch;">
                            <details>
                                <summary>Подробнее</summary>
                                <p>Укажите наличие актива на личном устройстве</p>
                            </details>
                        </h5>
                    </th>
                </tr>

                <tr>
                    <td id="col0"><input type="text" name="actives" value="" /></td>
                    <td id="col1" style="text-align: center;">
                        <select name="is1" id="is1"> 
                            <option>7-ZIP</option> 
                            <option>ABBYY Fine Reader</option>
                            <option>ABBYY PDF Transformer</option>
                            <option>Adobe Acrobat Pro</option>
                            <option>Adobe Acrobat Reader DC RU</option>
                            <option>ARIS</option>
                            <option>Cisco AnyConnect</option>
                            <option>Cisco VPN Client</option>
                            <option>Citrix XenApp\XenDesktop</option>
                            <option>COHO/ИСИД/</option>
                            <option>НДС/ЭФНО</option>
                            <option>Crypto Socket</option>
                            <option>DjView</option>
                            <option">Eclipse</option>
                            <option>Eset NOD32</option>
                            <option>Flash player</option>
                            <option>Geographix_Landmark</option>
                            <option>GeoX</option>
                            <option >Google Chrome</option>
                            <option>Halyk TradePro </option>
                            <option>HIS Kingdom</option>
                            <option>HR Кондратенко</option>
                            <option>Interactive_Petrophysics</option>
                            <option>Java Runtime Environment</option>
                            <option>KASE</option>
                            <option>KAzToken</option>
                            <option>Lotus Notes 9</option>
                            <option>Microsoft Edge</option>
                            <option>Mozila Firefox</option>
                            <option>MS Lync/Skype for Business 2016 </option>
                            <option>MS Office 2013-2019 Professional Plus (Excel, Word, Outlook, Power Point, Visio Viewer)</option>
                            <option>MS Project Pro 2010 SP2 - 2019</option>
                            <option>NCA Layer</option>
                            <option>OFM</option>
                            <option>OpenText Enterprise connect </option>
                            <option>Opera</option>
                            <option>Petrel</option>
                            <option>SAP BPC</option>
                            <option>SAP GUI 7.10 - 7.40</option>
                            <option>SAP Secure Login Client
                            </option>
                            <option>SAP-Enable-Now-SLCPlayer</option>
                            <option>SchlumbergerLicensing</option>
                            <option>TechLog</option>
                            <option>ThomsonReuters</option>
                            <option>TechLog</option>
                            <option>TumarCSP</option>
                            <option>ГАРАНТ</option>
                            <option>ЕССО</option>
                            <option>КНП Плагин</option>
                            <option>ПАРАГРАФ</option>
                            <option>СЕЗАМ</option>
                            <option>Corel DRAW</option>
                            <option>Adobe Illustrator</option>
                            <option>Adobe Photoshop</option>
                            <option>AutoCAD</option>
                            <option>K-Lite Codec Pack</option>
                            <option>1C:Предприятие 8</option>
                            <option>Bloomberg Professional Service/ Bloomberg Office Tools</option>
                            <option>ArcGIS</option>
                            <option>Notepad++</option>
                            <option>Primavera P6</option>
                            <option>Rail-Атлас/ Rail-Инфо/ Rail-Тариф</option>
                            <option>КриптоПро CSP</option>
                            <option>ГАРАНТ аэро</option>
                            <option>Системы банк-клиент</option>
                            </select>
                    </td>

                    <td id="col2" style="text-align: center;">
                        <select name="is2" id="is2"> 
                        <option>7-ZIP</option> 
                            <option>ABBYY Fine Reader</option>
                            <option>ABBYY PDF Transformer</option>
                            <option>Adobe Acrobat Pro</option>
                            <option>Adobe Acrobat Reader DC RU</option>
                            <option>ARIS</option>
                            <option>Cisco AnyConnect</option>
                            <option>Cisco VPN Client</option>
                            <option>Citrix XenApp\XenDesktop</option>
                            <option>COHO/ИСИД/</option>
                            <option>НДС/ЭФНО</option>
                            <option>Crypto Socket</option>
                            <option>DjView</option>
                            <option">Eclipse</option>
                            <option>Eset NOD32</option>
                            <option>Flash player</option>
                            <option>Geographix_Landmark</option>
                            <option>GeoX</option>
                            <option >Google Chrome</option>
                            <option>Halyk TradePro </option>
                            <option>HIS Kingdom</option>
                            <option>HR Кондратенко</option>
                            <option>Interactive_Petrophysics</option>
                            <option>Java Runtime Environment</option>
                            <option>KASE</option>
                            <option>KAzToken</option>
                            <option>Lotus Notes 9</option>
                            <option>Microsoft Edge</option>
                            <option>Mozila Firefox</option>
                            <option>MS Lync/Skype for Business 2016 </option>
                            <option>MS Office 2013-2019 Professional Plus (Excel, Word, Outlook, Power Point, Visio Viewer)</option>
                            <option>MS Project Pro 2010 SP2 - 2019</option>
                            <option>NCA Layer</option>
                            <option>OFM</option>
                            <option>OpenText Enterprise connect </option>
                            <option>Opera</option>
                            <option>Petrel</option>
                            <option>SAP BPC</option>
                            <option>SAP GUI 7.10 - 7.40</option>
                            <option>SAP Secure Login Client
                            </option>
                            <option>SAP-Enable-Now-SLCPlayer</option>
                            <option>SchlumbergerLicensing</option>
                            <option>TechLog</option>
                            <option>ThomsonReuters</option>
                            <option>TechLog</option>
                            <option>TumarCSP</option>
                            <option>ГАРАНТ</option>
                            <option>ЕССО</option>
                            <option>КНП Плагин</option>
                            <option>ПАРАГРАФ</option>
                            <option>СЕЗАМ</option>
                            <option>Corel DRAW</option>
                            <option>Adobe Illustrator</option>
                            <option>Adobe Photoshop</option>
                            <option>AutoCAD</option>
                            <option>K-Lite Codec Pack</option>
                            <option>1C:Предприятие 8</option>
                            <option>Bloomberg Professional Service/ Bloomberg Office Tools</option>
                            <option>ArcGIS</option>
                            <option>Notepad++</option>
                            <option>Primavera P6</option>
                            <option>Rail-Атлас/ Rail-Инфо/ Rail-Тариф</option>
                            <option>КриптоПро CSP</option>
                            <option>ГАРАНТ аэро</option>
                            <option>Системы банк-клиент</option>
                            
                            </select>
                    </td>

                    <td id="col3" style="text-align: center;">
                        <select name="is3" id="is3"> 
                        <option>7-ZIP</option> 
                            <option>ABBYY Fine Reader</option>
                            <option>ABBYY PDF Transformer</option>
                            <option>Adobe Acrobat Pro</option>
                            <option>Adobe Acrobat Reader DC RU</option>
                            <option>ARIS</option>
                            <option>Cisco AnyConnect</option>
                            <option>Cisco VPN Client</option>
                            <option>Citrix XenApp\XenDesktop</option>
                            <option>COHO/ИСИД/</option>
                            <option>НДС/ЭФНО</option>
                            <option>Crypto Socket</option>
                            <option>DjView</option>
                            <option">Eclipse</option>
                            <option>Eset NOD32</option>
                            <option>Flash player</option>
                            <option>Geographix_Landmark</option>
                            <option>GeoX</option>
                            <option >Google Chrome</option>
                            <option>Halyk TradePro </option>
                            <option>HIS Kingdom</option>
                            <option>HR Кондратенко</option>
                            <option>Interactive_Petrophysics</option>
                            <option>Java Runtime Environment</option>
                            <option>KASE</option>
                            <option>KAzToken</option>
                            <option>Lotus Notes 9</option>
                            <option>Microsoft Edge</option>
                            <option>Mozila Firefox</option>
                            <option>MS Lync/Skype for Business 2016 </option>
                            <option>MS Office 2013-2019 Professional Plus (Excel, Word, Outlook, Power Point, Visio Viewer)</option>
                            <option>MS Project Pro 2010 SP2 - 2019</option>
                            <option>NCA Layer</option>
                            <option>OFM</option>
                            <option>OpenText Enterprise connect </option>
                            <option>Opera</option>
                            <option>Petrel</option>
                            <option>SAP BPC</option>
                            <option>SAP GUI 7.10 - 7.40</option>
                            <option>SAP Secure Login Client
                            </option>
                            <option>SAP-Enable-Now-SLCPlayer</option>
                            <option>SchlumbergerLicensing</option>
                            <option>TechLog</option>
                            <option>ThomsonReuters</option>
                            <option>TechLog</option>
                            <option>TumarCSP</option>
                            <option>ГАРАНТ</option>
                            <option>ЕССО</option>
                            <option>КНП Плагин</option>
                            <option>ПАРАГРАФ</option>
                            <option>СЕЗАМ</option>
                            <option>Corel DRAW</option>
                            <option>Adobe Illustrator</option>
                            <option>Adobe Photoshop</option>
                            <option>AutoCAD</option>
                            <option>K-Lite Codec Pack</option>
                            <option>1C:Предприятие 8</option>
                            <option>Bloomberg Professional Service/ Bloomberg Office Tools</option>
                            <option>ArcGIS</option>
                            <option>Notepad++</option>
                            <option>Primavera P6</option>
                            <option>Rail-Атлас/ Rail-Инфо/ Rail-Тариф</option>
                            <option>КриптоПро CSP</option>
                            <option>ГАРАНТ аэро</option>
                            <option>Системы банк-клиент</option>
                            
                            </select>
                    </td>


                    <td id="col4" style="text-align: center;">
                        <select name="conf" id="conf"> 
			<option value="00">Выбрать</option> 
            <option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			</select>
                    </td>

                    <td id="col5" style="text-align: center;">
                        <select name="integrity" id="integrity"> 
                    <option value="00">Выбрать</option> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                    </td>

                    <td id="col6" style="text-align: center;">
                        <select name="avail" id="avail"> 
                            <option value="00">Выбрать</option> 
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            </select>
                    </td>


                    <td id="col7" style="text-align: center;">
                        <select name="letter" id="letter"> 
                        <option value="0">Выбрать</option> 
                        <option value="Да">Да</option>
                                                <option value="Нет">Нет</option>
                        </select>
                    </td>
                    <td id="col8" style="text-align: center;">
                        <select name="pk" id="pk"> 
                            <option value="0">Выбрать</option> 
                            <option value="Да">Да</option>
                            <option value="Нет">Нет</option>
                            </select>
                    </td>
                    <td id="col9" style="text-align: center;">
                        <select name="m" id="m"> 
                                <option value="0">Выбрать</option> 
                                <option value="Да">Да</option>
                                <option value="Нет">Нет</option>
                                </select>
                    </td>

                    <td id="col10" style="text-align: center;">
                        <select name="dsp" id="dsp"> 
                                        <option value="0">Выбрать</option>
                                        <option value="Да">Да</option>
                                        <option value="Нет">Нет</option>
                                        </select>
                    </td>

                    <td id="col11">
                        <select name="coninf" id="coninf"> 
                        <option value="0">Выбрать</option> 
                        <option value="Да">Да</option>
                        <option value="Нет">Нет</option>
                        </select>
                    </td>

                    <td id="col12">
                        <select name="private" id="coninf"> 
                        <option value="0">Выбрать</option> 
                        <option value="Да">Да</option>
                        <option value="Нет">Нет</option>
                        </select>
                    </td>

                </tr>
            </table>
            <table>
                <tr>
                    <td style="background-color: rgb(19, 110, 133);"><input type="button" value="Добавить" name="add" onclick="addRows()" /></td>
                    <td style="background-color: tomato; "><input type="button" value="Удалить строку" name="delete" onclick="deleteRows()" /></td>
                    <td style="background-color: rgb(72, 150, 65); "><button type="submit"  name = "submit"> Отправить </button></td>
                </tr>
            </table>
        </form>
</body>

</html>