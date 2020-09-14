#include<stdio.h>
//10 elemanlý bir diziye girilen sayýlardan 10'un altýnda olanlarý yazdýran fonksiyonu yazýnýz.


int sayilar[10],i,j,k,z,sayi;
void yazdir() //Fonksiyon kýsmýný tanýmlýyoruz.
{
	while(z<9) //k=9 oldugunda indis numarasý sonuncu elemaný kontrol ediceði için z'nin 8 defa dönmesi gerekir.
	{   
		if(sayilar[k]<10) //Bu kýsýmda 0. indisten baþlayarak içindeki deðerler sýrayla kontrol ediliyor.Þart saðlanýyorsa eðer ekrana yazýlýyor.
		printf("ondan kucuk olan degerler: %d\n",sayilar[k]);
		k++;
		z++;
	}
}

void main()
{
	
	for(i=0;i<10;i++) //10 tane sayýyý sýrayla diziye atýyoruz.
	{   
	    
		scanf("%d",&sayi);
		sayilar[j]=sayi;
		j++;
	}
	yazdir(); //Fonksiyonumuzu çaðýrýyoruz.
}
