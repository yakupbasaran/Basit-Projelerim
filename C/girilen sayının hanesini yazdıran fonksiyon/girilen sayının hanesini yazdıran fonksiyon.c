#include<stdio.h>
int sayi,basamak; //Girilen say�n�n ka� haneli oldu�unu yazd�ran function.
void deneme(){
	
	
	while(sayi>=1)
	{
		sayi=sayi/10;  //Hane bulma i�lemi burada yap�l�yor.
		basamak++; //function kullanmadanda bu k�sm� void mainin alt�na yazarsak haneyi buluruz.
	}
}


void main()
{
	scanf("%d",&sayi);
	deneme();
	printf("basamak sayisi: %d",basamak);
	
	
}
