/*
Soru 1: Verilen bir dizinin eleman sirasini tersine çevirip bir dizi olarak döndüren diziTersi($dizi1, $dizi2) fonksiyonu yaziniz. Sifir(0) sayisi girilinceye kadar klavyeden girilen sayilari bir diziye yerlestiren ve bu diziyi döndüren diziOku fonksiyonunu yaziniz. Verilen bir diziyi her satira bir sayi gelecek sekilde ekrana yazdiran diziYaz fonksiyonunu yaziniz. Verilen bir dizideki sayilari önce diziOku fonksiyonunu çagirarak okuyan, sonra bu diziyi diziTersi fonsiyonunu çagirarak tersine çeviren ve diziYaz fonsiyonunun çagirarak ekrana yazdiran programi veriniz.

<?php
$dizi = diziOku();
$sonuc = diziTersi($dizi);
print "Dizinin tersi\n";
diziYaz($sonuc);
?>

Örnek çalisma senaryosu:
--------------------------------------
Sayilari giriniz (sifirla bitiriniz)
2
3
4
0ss

Dizinin tersi:
4
3
2

*/

<?php
$dizi = diziOku();
print "Dizinin tersi\n";
$sonuc = diziTersi($dizi);
diziYaz($sonuc);


function diziTersi($dizi)
{
    for ($i = count($dizi) - 1; $i >= 0; $i--) {
        $dizi[] = $dizi[$i];
        unset($dizi[$i]);
    }
    print_r($dizi);//????
}

function diziYaz($x)
{

    for ($i = 0; $i < count($x); $i++) {
        print($x[$i]) . "\n";
    }
    return;
}

function diziOku()
{

    $i = 0;
    $temp = array();        // bos array tanimla
    // klavyeden sayilari oku ve $temp dizisine sakla
    do {
        $deger = (int)fgets(STDIN);    // bir sayi oku
        if ($deger == 0)        // eger girilen sayi sifirsa
            break;            // donguden cik
        $temp[$i] = $deger;    // $deger'i $temp dizisine ekle
        //$temp[] = $deger; seklinde de yazilabilir
        $i++;
    } while ($deger);        // eger $deger sifirdan(false) farkliysa

    return $temp;
}

?>
/*Soru 2: Verilen iki dizinin bir döngüyle karsilikli elemanlari toplami, çarpimini bir dizi olarak döndüren toplama($kume1, $kume2), carpma($kume1, $kume2), cikarma($kume1, $kume2) fonksiyonlarini yaziniz. Iki dizideki elemanlari diziOku fonksiyonunu çagirarak okuyan sonra bu dizilerin toplam, çarpim ve farklarini ilgili fonksiyonlarini çagirarak bulan ve diziYaz fonksiyonuyla ekrana yazdiran programi veriniz.
*/

<?php
print "Birinci dizi için sayilari giriniz(0: bitis)\n";
$dizi1 = diziOku();
print "Ikinci dizi için sayilari giriniz(0: bitis)\n";
$dizi2 = diziOku();


$toplam = toplam($dizi1, $dizi2);
print "toplam \n";
matrisYaz($toplam);

$carpim = carpim($dizi1, $dizi2);
print "carpim \n";
matrisYaz($carpim);


$fark = fark($dizi1, $dizi2);
print "fark \n";
matrisYaz($fark);


function diziOku()
{

    $i = 0;
    $temp = array();        // bos array tanimla
    // klavyeden sayilari oku ve $temp dizisine sakla
    do {
        $deger = (int)fgets(STDIN);    // bir sayi oku
        if ($deger == 0)        // eger girilen sayi sifirsa
            break;            // donguden cik
        $temp[$i] = $deger;    // $deger'i $temp dizisine ekle
        //$temp[] = $deger; seklinde de yazilabilir
        $i++;
    } while ($deger);        // eger $deger sifirdan(false) farkliysa
    return $temp;
}

function matrisYaz($dizi)
{

    for ($i = 0; $i < count($dizi); $i++) {
        print($dizi[$i]) . "\n";
    }
    return;
}

function toplam($dizi1, $dizi2)
{
    for ($i = 0; $i < count($dizi1); $i++) {
        $sonuc[$i] = $dizi1[$i] + $dizi2[$i];
    }
    return $sonuc;
}

function carpim($dizi1, $dizi2)
{

    for ($i = 0; $i < count($dizi1); $i++) {
        $sonuc[$i] = $dizi1[$i] * $dizi2[$i];
    }
    return $sonuc;
}

function fark($dizi1, $dizi2)
{

    for ($i = 0; $i < count($dizi1); $i++) {
        $sonuc[$i] = $dizi1[$i] - $dizi2[$i];
    }
    return $sonuc;
}



/*Soru 3: Verilen bir dizinin elemanlarini küçükten büyüge siralayan diziSirala fonksiyonu yaziniz. sort gibi hazir fonksiyon kullanmayiniz. Verilen bir dizideki sayilari önce diziOku fonksiyonunu çagirarak okuyan, sonra bu diziyi diziSirala fonsiyonunu çagirarak siralayan ve diziYaz fonsiyonunun çagirarak ekrana yazdiran programi veriniz.
 */


<?php
print " dizi için sayilari giriniz(0: bitis)\n";
$dizi = diziOku();
$diziSirala = diziSirala($dizi);
print "sorted array \n";
matrisYaz($diziSirala);


function matrisYaz($dizi){

    for($i = 0; $i < count($dizi); $i++){
        print($dizi[$i]) . "\n";
    }
    return;
}

function diziSirala ($dizi){

    for($j = 0; $j < count($dizi); $j ++) {
        for($i = 0; $i < count($dizi)-1; $i ++){
            if($dizi[$i] > $dizi[$i+1]) {
                $temp = $dizi[$i+1];
                $dizi[$i+1]=$dizi[$i];
                $dizi[$i]=$temp;
            }
        }
    }
    return $dizi;
}

function diziOku(){

    $i = 0;
    $temp = array();		// bos array tanimla
    // klavyeden sayilari oku ve $temp dizisine sakla
    do{
        $deger = (int)fgets(STDIN);	// bir sayi oku
        if($deger == 0)		// eger girilen sayi sifirsa
            break;			// donguden cik
        $temp[$i] = $deger;	// $deger'i $temp dizisine ekle
        $i++;
    }
    while($deger);		// eger $deger sifirdan(false) farkliysa
    return $temp;
}
?>





/*Soru 4: Verilen bir dizinin medyanini döndüren diziMedyani fonksiyonu yaziniz (Medyan yani orta elemanini bulma: Dizideki sayilar küçükten büyüge siralanir. Dizideki eleman sayisi n tek sayiysa, orta eleman tamsayi bölmeyle n/2. elemandir. Eleman sayisi çift sayiysa, orta eleman dizinin ortasindaki 2 elemanin yani (n/2)-1. eleman ve n/2. elemanin ortalamasidir.) Verilen bir dizideki sayilari önce diziOku fonksiyonunu çagirarak okuyan, sonra bu diziyi diziMedyani fonsiyonunu çagirarak medyanini bulan ve ekrana diziYaz ile yazdiran programi veriniz. diziMedyani fonksiyonu siralama için hazir sort fonksiyonunu kullanabilir.
*/
<?php
print " dizi için sayilari giriniz(0: bitis)\n";
$dizi = diziOku();
$diziMedyani = diziMedyani($dizi);
$diziSirala = diziSirala($dizi);
print "sorted array \n";
matrisYaz($diziSirala);
print " MEDIAN is element :" ;
print $diziMedyani;

function diziYaz($x){

    for($i = 0; $i < count($x); $i++){
        print($x[$i]) . "\n";
    }
    return;
}

function diziMedyani ($dizi){
    $count = count($dizi); //total numbers in array
    $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
    if($count % 2) { // odd number, middle is the median
        $median = $dizi[$middleval];
    } else { // even number, calculate avg of 2 medians
        $low = $dizi[$middleval];
        $high = $dizi[$middleval+1];
        $median = (($low+$high)/2);
    }
    return $median;
}

function diziSirala ($dizi){ //sorting function

    for($j = 0; $j < count($dizi); $j ++) {
        for($i = 0; $i < count($dizi)-1; $i ++){
            if($dizi[$i] > $dizi[$i+1]) {
                $temp = $dizi[$i+1];
                $dizi[$i+1]=$dizi[$i];
                $dizi[$i]=$temp;
            }
        }
    }
    return $dizi;
}

function diziOku(){

    $i = 0;
    $temp = array();		// bos array tanimla
    // klavyeden sayilari oku ve $temp dizisine sakla
    do{
        $deger = (int)fgets(STDIN);	// bir sayi oku
        if($deger == 0)		// eger girilen sayi sifirsa
            break;			// donguden cik
        $temp[$i] = $deger;	// $deger'i $temp dizisine ekle
        //$temp[] = $deger; seklinde de yazilabilir
        $i++;
    }
    while($deger);		// eger $deger sifirdan(false) farkliysa
    return $temp;
}
?>


/*Soru 5: Verilen iki diziyi küme kabul ederek küme bilesimini, farkini ve kesisimini dizi olarak döndüren birlesim($kume1, $kume2), fark($kume1, $kume2), kesisim($kume1, $kume2) fonksiyonlarini yaziniz. Iki kümedeki elemanlari diziOku fonksiyonunu çagirarak okuyan sonra bu dizilerin bilesimini, farkini ve kesisimini yukardaki fonksiyonlarini çagirarak bulan ve diziYaz fonksiyonuyla ekrana yazdiran programi veriniz.
*/
<?php
print " 1.dizi için sayilari giriniz(0: bitis)\n";
$dizi1 = diziOku();
print " 2.dizi için sayilari giriniz(0: bitis)\n";
$dizi2 = diziOku();

print "birlesim \n";
$birlesim = birlesim($dizi1, $dizi2);
diziYaz($birlesim);

print "Fark \n";
$fark = fark($dizi1, $dizi2);
diziYaz($fark);

print "kesisim\n";
$kesisim = kesisim($dizi1, $dizi2);
diziYaz($kesisim);



function diziYaz($x){

    for($i = 0; $i < count($x); $i++){
        print($x[$i])."\n";
    }
    return;
}

 function birlesim($kume1, $kume2){

     $birlesim = array_merge($kume1, $kume2);
     return $birlesim;
 }

 function fark($kume1, $kume2){

    $fark = array_diff($kume1, $kume2);
    return $fark;
}

function kesisim($kume1, $kume2){

    $kesisim = array_intersect($kume1, $kume2);
    return $kesisim;
}

function diziOku(){

    $i = 0;
    $temp = array();		// bos array tanimla
    // klavyeden sayilari oku ve $temp dizisine sakla
    do{
        $deger = (int)fgets(STDIN);	// bir sayi oku
        if($deger == 0)		// eger girilen sayi sifirsa
            break;			// donguden cik
        $temp[$i] = $deger;	// $deger'i $temp dizisine ekle
        //$temp[] = $deger; seklinde de yazilabilir
        $i++;
    }
    while($deger);		// eger $deger sifirdan(false) farkliysa
    return $temp;
}
?>

/*
Soru 6: $metin1 ve $metin2 içerisinde verilen 2 string'in(karakter katari) içinde geçen karakterlerin (harf, rakam, sembol vs.) küme bilesimini, farkini ve kesisimini string olarak döndüren metinBirlesim($metin1, $metin2), metinfark($metin1, $metin2), metinKesisim($metin1, $metin2) fonksiyonlarini yaziniz. Iki metni klavyeden okuyarak bunlarin bilesimini, farkini ve kesisimini yukardaki fonksiyonlarini çagirarak bulan ve sonuçlarini ekrana yazdiran programi veriniz.
*/

<?php


echo "Birinci metni giriniz?\n ";
$string1 = trim(fgets(STDIN));
echo "Ikinci metni giriniz?\n ";
$string2 = trim(fgets(STDIN));
print " Küme kesisim:  ";
print kesisim($string1, $string2);
print "Küme farki:";
print fark($string1, $string2);
print "Küme birlesimi:";
print birlesim($string1, $string2);

function kesisim($string1, $string2)
{

    $sonuc = array();
    $z = 0;
    for ($i = 0; $i < strlen($string1); $i++) {
        for ($j = 0; $j < strlen($string2); $j++) {
            if ($string1[$i] == $string2[$j] && !in_array($string1[$i], $sonuc)) {
                $sonuc[$z] = $string1[$i];
            }
            $z++;
        }
    }
    return implode('', $sonuc);
}


function birlesim($string1, $string2)

{
    $sonuc = '';
    for ($i = 0; $i < strlen($string1); $i++)
        if (! icindemi($sonuc, $string1[$i]))
            $sonuc .= $string1[$i];
     for ($i = 0; $i < strlen($string2); $i++)
        if (! icindemi($sonuc, $string2[$i]))
              $sonuc .= $string2[$i];
    return $sonuc;

}

function fark($string1, $string2)

{
    /*$dizi1 = str_split($string1);
    $dizi2 = str_split($string2);
    $difference = array_diff($dizi1, $dizi2);
    return implode('', $difference); */
        $sonuc = '';
       for ($i = 0; $i < strlen($string1); $i++) {
               if (! icindemi($string2, $string1[$i])) {
                   $sonuc .= $string1[$i];
               }
       }
       return $sonuc;
}
function icindemi($haystack, $needle){
    for ($i=0 ; $i < strlen($haystack); $i++)
        if($haystack[$i]==$needle)
            return true;
    return false;
}
?>

?>

/*Soru 7: $metin1 ve $metin2 içerisinde verilen 2 string'in(karakter katari) içinde geçen ve birbirinden bosluk karakteriyle ayrilmis kelimelerin küme bilesimini, farkini ve kesisimini dizi olarak döndüren kelimeBirlesim($kume1, $kume2), kelimefark($kume1, $kume2), kelimeKesisim($kume1, $kume2) fonksiyonlarini yaziniz. Iki metni klavyeden okuyarak bunlarin bilesimini, farkini ve kesisimini yukardaki fonksiyonlarini çagirarak bulan ve sonuçlarini ekrana yazdiran programi veriniz. String'i kelimelerine ayirmak için substr haricinde hazir fonksiyon kullanmayiniz.

Örnek senaryo:

Birinci metni giriniz?
istanbul üniversitesi
Ikinci metni giriniz?
cerrahpasa üniversitesi
Küme birlesimi: istanbul üniversitesi cerrahpasa
Küme kesisim: üniversitesi
Küme farki: istanbul*/

<?php
echo "Birinci metni giriniz?\n ";
$words1 = explode(' ', fgets(STDIN));
echo "Ikinci metni giriniz?\n ";
$words2 = explode(' ', fgets(STDIN));
print"Küme birlesimi:  ";
print_r(birlesim($words1, $words2)) ;
print"Küme farki:  ";
print_r(fark($words1, $words2));
print"Küme  kesisim:  ";
print_r(kesisim($words1, $words2));

function birlesim($string1, $string2) {
    $sonuc = array();
    for ($i = 0; $i < sizeof($string1); $i++)
        if (! icindemi($sonuc, $string1[$i])){
            $sonuc[] = $string1[$i];
            $sonuc[] = ' ';
        }
    for ($i = 0; $i < sizeof($string2); $i++)
        if (! icindemi($sonuc, $string2[$i]))  {
            $sonuc[] = $string2[$i];
            $sonuc[] = ' ';
        }
    return $sonuc;
}

function fark($string1, $string2)

{

    $sonuc = array();
       for ($i = 0; $i < sizeof($string1); $i++) {
               if (! icindemi($string2, $string1[$i])) {
                   $sonuc[] = $string1[$i];
               }
       }
       return $sonuc;
}

function kesisim($string1, $string2)
{

    $sonuc = array();
    $z = 0;
    for ($i = 0; $i < sizeof($string1); $i++) {
        for ($j = 0; $j < sizeof($string2); $j++) {
            if ($string1[$i] == $string2[$j] && !in_array($string1[$i], $sonuc)) {
                $sonuc[$z] = $string1[$i];
            }
            $z++;
        }
    }
    return  $sonuc;
}


function icindemi($haystack, $needle) {
    for ($i=0 ; $i < sizeof($haystack); $i++)
        if($haystack[$i]==$needle)
            return true;
    return false;
}

?>


/* Soru 8:
(i) Klavyeden girilen kitap adi ve fiyatlarini dizi(ler)de saklayip (kitap adi bos girilince bilgi girisi biter),
(ii) en pahali ve en ucuz hariç tutularak hesaplanan ortalama kitap fiyatina en yakin kitap(lar)in ismini yazdiran,
(iii) ortalama fiyata olan fiyat uzakliklarin ortalamasini (yani fiyatlarin standart sapmasi) bulup yazdiran,

Bu programi (soru 8) test ederken en az üç farkli fiyat girilecek. Sedece iki veya bir farkli fiyat girilirse program, heaplama yapmayip yeniden en az 3 farkli kitap/fiyat bilgi girisini bastan talep edecektir. En ucuz ve en pahali kitap birden fazla varsa onlarin tamamini ortalama hesabinin disinda tutacaksiniz.


Örnek senaryo:

Kitap adi? safahat
Kitap fiyati? 25
Kitap adi? Serguzest
Kitap fiyati? 35
Kitap adi? Calikusu
Kitap fiyati? 10
Kitap adi?
ortalamaya en yakin kitaplarin fiyatlari:
Serguzest 25TL
Standart sapma: 7,5
*/

<?php
print"lutfen en az 3 kitap ve fiyat yaziniz \n";

oku();

function oku()
{
    $counter = 0;
    $i = 0;

    while (1) {

        print"kitap adi \n";
        $kitap[$i] = fgets(STDIN);
        print"kitap fiyat \n";
        $fiyat[$i] = (int)fgets(STDIN);
        $i = $i + 1;
        $counter = $counter + 1;
        if ($counter == 2)
            break;
    }
    print"Standart sapma \n";
    $search = ortalama($fiyat);
    print $search . "\n";
    $enyakinfiyat = enyakin($search, $fiyat);
    $enyakinkitap;
    for ($i = 0; $i < $counter; $i++) {
        if ($enyakinfiyat == $fiyat[$i]) {
            $enyakinkitap = $kitap[$i];
            break;
        }
    }
    print"ortalamaya en yakin kitaplarin fiyatlari:";
    print $enyakinkitap . " " . $enyakinfiyat;
}


function ortalama($dizi)
{
    $num = count($dizi);

    $variance = 0.0;
    $orta = array_sum($dizi) / count($dizi);
    foreach ($dizi as $i) {
        $variance += pow(($i - $orta), 2);
    }
    return (float)sqrt($variance / $num);
}

function enyakin($search, $dizi)
{
    $yakin = null;
    foreach ($dizi as $item) {
        if ($yakin === null || abs($search - $yakin) > abs($item - $search)) {
            $yakin = $item;
        }
    }
    return $yakin;
}
?>


