# Türkiye Hava Durumu Rest-API

## 32 şehir için Günlük Hava Durumu Bilgisi

### Hergün 12 saat arayla güncellenir 2 Periyotlu Sabah/Akşam

## GET isteği ile Kullanımı JSON Object Döner
<p> GET isteği yollanarak bilgi alınır. <br> http://havadurumuapi.epizy.com/havadurumu/van <br>Çıktı:</p>
<code> { "Sehir": "van","Durum":"Parçalı bulutlu","Periyot":"Aksam","MaxSicaklik":29,"MinSicaklik":12} </code>

## Tüm şehirler için Kullanımı JSON Array döner
<p> GET isteği yollanarak bilgi alınır. <br> http://havadurumuapi.epizy.com/havadurumu <br>Çıktı:</p>
<code> [{ "Sehir": "van","Durum":"Parçalı bulutlu","Periyot":"Aksam","MaxSicaklik":29,"MinSicaklik":12},
...}]
</code>

## Kullanılabilir Şehirler Listesi
<table>
<tr>
  <th>GET Parametresi/Şehir adı</th>
<tr>
<tr>
  <td>istanbul</td>
</tr>  
<tr>
  <td>bursa</td>
</tr>
  <tr>
  <td>canakkale</td>
</tr>
  <tr>
  <td>izmir</td>
</tr>
  <tr>
  <td>a.karahisar</td>
</tr>
  <tr>
  <td>denizli</td>
</tr> 
<tr>
  <td>adana</td>
</tr> 
<tr>
  <td>antalya</td>
</tr>
  <tr>
  <td>hatay</td>
</tr>
  <tr>
  <td>ankara</td>
</tr>
  <tr>
  <td>eskisehir</td>
</tr> 
  <tr>
  <td>bolu</td>
</tr>
  <tr>
  <td>zonguldak</td>
</tr>
  <tr>
  <td>sinop</td>
</tr>
  <tr>
  <td>samsun</td>
</tr>
  <tr>
  <td>trabzon</td>
</tr>
  <tr>
  <td>amasya</td>
</tr> 
  <tr>
  <td>erzurum</td>
</tr> 
  <tr>
  <td>van</td>
</tr> 
  <tr>
  <td>malatya</td>
</tr>
  <tr>
  <td>diyarbakir</td>
</tr>
  <tr>
  <td>sanliurfa</td>
</tr>
  <tr>
  <td>siirt</td>
</tr>
  <tr>
  <td>kirklareli</td>
</tr> 
  <tr>
  <td>sivas</td>
</tr>
  <tr>
  <td>bayburt</td>
</tr>
  <tr>
  <td>kars</td>
</tr>
  <tr>
  <td>gaziantep</td>
</tr> 
  <tr>
  <td>isparta</td>
</tr>
  <tr>
  <td>duzce</td>
</tr> 
  <tr>
  <td>manisa</td>
</tr> 
  <tr>
  <td>konya</td>
</tr> 
</table>
