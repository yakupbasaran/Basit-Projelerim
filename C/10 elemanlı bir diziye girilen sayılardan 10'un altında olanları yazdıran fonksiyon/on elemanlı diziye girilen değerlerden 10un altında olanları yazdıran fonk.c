#include<stdio.h>
//10 elemanl� bir diziye girilen say�lardan 10'un alt�nda olanlar� yazd�ran fonksiyonu yaz�n�z.


int sayilar[10],i,j,k,z,sayi;
void yazdir() //Fonksiyon k�sm�n� tan�ml�yoruz.
{
	while(z<9) //k=9 oldugunda indis numaras� sonuncu eleman� kontrol edice�i i�in z'nin 8 defa d�nmesi gerekir.
	{   
		if(sayilar[k]<10) //Bu k�s�mda 0. indisten ba�layarak i�indeki de�erler s�rayla kontrol ediliyor.�art sa�lan�yorsa e�er ekrana yaz�l�yor.
		printf("ondan kucuk olan degerler: %d\n",sayilar[k]);
		k++;
		z++;
	}
}

void main()
{
	
	for(i=0;i<10;i++) //10 tane say�y� s�rayla diziye at�yoruz.
	{   
	    
		scanf("%d",&sayi);
		sayilar[j]=sayi;
		j++;
	}
	yazdir(); //Fonksiyonumuzu �a��r�yoruz.
}
