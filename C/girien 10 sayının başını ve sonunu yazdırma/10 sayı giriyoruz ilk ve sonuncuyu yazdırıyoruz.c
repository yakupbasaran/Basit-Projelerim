#include<stdio.h>

//Klavyeden 10 tane say� giriyoruz.�lk girilen ve son girilen say�lar� ekrana yazd�r�yoruz.
int sayi,i,seed,index,sayilar[10],j;
void main(){
	
	for(i=0;i<10;i++)  //Klavyeden 10 tane say� girmek i�in olu�turulan d�ng�.
	{
		scanf("%d",&sayi); 
		sayilar[i]=sayi;
		
	}
	
	printf("Ilk girilen deger: %d\n",sayilar[0]);
	printf("Son girilen deger: %d\n",sayilar[9]);
}
