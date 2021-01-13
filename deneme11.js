var hesapmakinesi=document.getElementById("ekranana");
/*--------------------------------------------------------------INPUT ALANI----------------*/
var textalani=document.createElement("input");
    textalani.setAttribute("type","text");
    textalani.setAttribute("id","ekran");
    textalani.setAttribute("placeholder","HESAP MAKİNESİ");
 ekranana.appendChild(textalani);
/*--------------------------------------------------------------INPUT ALANI----------------*/
/*----------------------------------------------------RAKAM BUTONLARI------------------*/
var rakam=document.getElementById("rakam");
var rakamdizi=["7","8","9","4","5","6","1","2","3","0"];
for(var i=0;i<=rakamdizi.length-1;i++){
var butonrakam=document.createElement("button");
butonrakam.setAttribute("id","butonrakam");
butonrakam.setAttribute("class","rakamlar");
butonrakam.setAttribute("onclick","textebas(this)");
butonrakam.innerText=rakamdizi[i];
rakam.appendChild(butonrakam);
}
/*----------------------------------------------------RAKAM BUTONLARI------------------*/
/*----------------------------------------------------sil BUTONU------------------*/
var silbuton=document.createElement("button");
silbuton.setAttribute("id","sil");
silbuton.setAttribute("onclick","sil()");
silbuton.innerText="sil";
rakam.appendChild(silbuton);
/*----------------------------------------------------sil BUTONU------------------*/
/*----------------------------------------------------ce BUTONU------------------*/
var cebuton=document.createElement("button");
cebuton.setAttribute("id","ce");
cebuton.setAttribute("onclick","ce()");
cebuton.innerText="ce";
rakam.appendChild(cebuton);
/*----------------------------------------------------ce BUTONU------------------*/
/*----------------------------------------------------İŞARET BUTONLARI------------------*/
var isaretdizi=["+","-","x","/","."];
var islem=document.getElementById("islem");
for(var i=0;i<isaretdizi.length-1;i++)
{
var isaretbuton=document.createElement("button");
isaretbuton.setAttribute("id",isaretdizi[i]);
isaretbuton.setAttribute("class","islemler");
isaretbuton.setAttribute("onclick","islembas(this)");
isaretbuton.innerText=isaretdizi[i];
islem.appendChild(isaretbuton);
}
var sonucbuton=document.createElement("button");
sonucbuton.setAttribute("id","esittir");
sonucbuton.setAttribute("class","islemler");
sonucbuton.setAttribute("onclick","sonuc(this)");
sonucbuton.innerText="=";
islem.appendChild(sonucbuton);
/*----------------------------------------------------İŞARET BUTONLARI------------------*/

/*---------------------------------------------------TEXTAREA ALANI---------------------*/
var textarea=document.createElement("textarea");
textarea.setAttribute("id","gecmis");
document.body.appendChild(textarea);
/*---------------------------------------------------TEXTAREA ALANI---------------------*/
//------------------------------*********************************************************************************------------------------------------//
function textebas(say){
document.getElementById("ekran").value+=say.innerHTML;
//document.getElementById("gecmis").value+=say.innerHTML;
}
function islembas(say){ 
  /*--------------------------------------------------------------GELEN DEĞERDEN ÖNCE İŞARET GELİYO MU KONTROLÜ--------------------*/
  var txtt=document.getElementById("ekran").value;
  if(txtt.endsWith("+")==true||txtt.endsWith("-")==true||txtt.endsWith("x")==true||txtt.endsWith("/")==true || txtt.endsWith(".")==true)
  {
   var texttt=txtt.replace(txtt[txtt.length-1],say.innerHTML);   //Gelen değerdeki(9+) işareti son girdiğimle değiştiriyorum. -->(x) 
  texttt.substr(0,texttt[texttt.length-1]);                     //(9xx) -> Son girdiğimide siliyorum.
   document.getElementById("ekran").value=texttt;
   //document.getElementById("gecmis").value=texttt;
  }
  else{
document.getElementById("ekran").value+=say.innerHTML;
//document.getElementById("gecmis").value+=say.innerHTML;
document.getElementById("history").innerHTML=document.getElementById("ekran").value;
/*-----------------------------------------------------------GELEN İLK DEĞERİN İŞARET OLMASI DURUMUNDA YAPILAN KONTROL---------------------*/
var ilkisaret=document.getElementById("ekran").value;
if(ilkisaret.startsWith("+", 0)==true )
{ 
document.getElementById("ekran").value="0+";
}
else if( ilkisaret.startsWith("-", 0)==true )
{
document.getElementById("ekran").value="0-";
}
else if( ilkisaret.startsWith("x", 0)==true )
{
    document.getElementById("ekran").value="0x";
}
else if( ilkisaret.startsWith("/", 0)==true )
{
    document.getElementById("ekran").value="";
    document.getElementById("ekran").placeholder="Belirsiz.";
}
/*-----------------------------------------------------------GELEN İLK DEĞERİN İŞARET OLMASI DURUMUNDA YAPILAN KONTROL---------------------*/
} //ilk sorgudaki else 'in kapanışı
} //function kapanış
function sonuc(){
var global=[];
var txt=document.getElementById("ekran").value;
global=[txt+"="];
var uzunluk=txt.length; //Dizinin uzunluğunu aldığım kısım.
/*---------------İŞARET İNDİSİNİ ALIP VARLIĞINI KONTROL ETTİĞİM KISIM-----------*/
var toplavarmi=txt.indexOf("+");     
var cikarvarmi=txt.indexOf("-");
var carpvarmi=txt.indexOf("x");   //İşaretlerin indisini alıp varlığını kontrol ettiğim kısım. 
var bolvarmi=txt.indexOf("/");     
/*---------------İŞARET İNDİSİNİ ALIP VARLIĞINI KONTROL ETTİĞİM KISIM-----------*/

/*---------------------------------GİRİLEN İŞARETE GÖRE İŞLEM YAPTIRMA------------------------------*/
if(toplavarmi!=-1 && cikarvarmi==-1 && carpvarmi==-1 && bolvarmi==-1)
{
  var sayi1=Number(txt.substring(0,toplavarmi));          //işaretin sağ tarafını alıp sayıya dönüştürdüğüm kısım
  var sayi2=Number(txt.substring(toplavarmi+1,uzunluk));    //işaretin sol tarafını alıp sayıya dönüştürdüğüm kısım
  var topla=sayi1+sayi2;
  global.push(topla+"\n");
 // document.getElementById("history").innerHTML+=sayi2;
  document.getElementById("ekran").value=topla;
  
//  document.getElementById("gecmis").value+="="+topla+'\n';
}

if(toplavarmi==-1 && cikarvarmi!=-1 && carpvarmi==-1 && bolvarmi==-1)
{
  var sayi1=Number(txt.substring(0,cikarvarmi));          //işaretin sağ tarafını alıp sayıya dönüştürdüğüm kısım
  var sayi2=Number(txt.substring(cikarvarmi+1,uzunluk));    //işaretin sol tarafını alıp sayıya dönüştürdüğüm kısım
  var cikar=sayi1-sayi2;
 // document.getElementById("history").innerHTML+=sayi2;
  document.getElementById("ekran").value=cikar;
  global.push(cikar+"\n");
 // document.getElementById("gecmis").value+="="+cikar+'\n';
}

if(toplavarmi==-1 && cikarvarmi==-1 && carpvarmi!=-1 && bolvarmi==-1)
{
  var sayi1=Number(txt.substring(0,carpvarmi));          //işaretin sağ tarafını alıp sayıya dönüştürdüğüm kısım
  var sayi2=Number(txt.substring(carpvarmi+1,uzunluk));    //işaretin sol tarafını alıp sayıya dönüştürdüğüm kısım
  var carp=sayi1*sayi2;
 // document.getElementById("history").innerHTML+=sayi2;
  document.getElementById("ekran").value=carp;
  global.push(carp+"\n");
 // document.getElementById("gecmis").value+="="+carp+'\n';
}
if(toplavarmi==-1 && cikarvarmi==-1 && carpvarmi==-1 && bolvarmi!=-1)
{
  var sayi1=Number(txt.substring(0,bolvarmi));          //işaretin sağ tarafını alıp sayıya dönüştürdüğüm kısım
  var sayi2=Number(txt.substring(bolvarmi+1,uzunluk));    //işaretin sol tarafını alıp sayıya dönüştürdüğüm kısım
  var bol=sayi1/sayi2;
//  document.getElementById("history").innerHTML+=sayi2;
  document.getElementById("ekran").value=bol;
  global.push(bol+"\n");
 // document.getElementById("gecmis").value+="="+bol+'\n';

}

document.getElementById("gecmis").value+=global.join("");
//document.getElementById("history").innerHTML+="=";
//document.getElementById("gecmis").innerHTML+="=";
/*---------------------------------GİRİLEN İŞARETE GÖRE İŞLEM YAPTIRMA------------------------------*/
//document.getElementById("gecmis").value+=global.join("")+"\n";

} //Function kapanış

function sil(){
    var dizi= document.getElementById("ekran").value;
    document.getElementById("ekran").value=dizi.substr(0,dizi.length-1);    //Karakterleri sondan başa doğru teker teker silmek için substr kullanımı.
}
function ce(){
    document.getElementById("ekran").value="";
  //  document.getElementById("history").innerHTML="History Alanı";   //Ekranın value'sunu sıfırlama
    document.getElementById("gecmis").value="";
}
