#include<stdio.h>

//Klavyeden 10 tane sayý giriyoruz.Ýlk girilen ve son girilen sayýlarý ekrana yazdýrýyoruz.
int sayi,i,seed,index,sayilar[10],j;
void main(){
	
	for(i=0;i<10;i++)  //Klavyeden 10 tane sayý girmek için oluþturulan döngü.
	{
		scanf("%d",&sayi); 
		sayilar[i]=sayi;
		
	}
	
	printf("Ilk girilen deger: %d\n",sayilar[0]);
	printf("Son girilen deger: %d\n",sayilar[9]);
}
