#include<stdio.h>
int sayi,basamak; //Girilen sayýnýn kaç haneli olduðunu yazdýran function.
void deneme(){
	
	
	while(sayi>=1)
	{
		sayi=sayi/10;  //Hane bulma iþlemi burada yapýlýyor.
		basamak++; //function kullanmadanda bu kýsmý void mainin altýna yazarsak haneyi buluruz.
	}
}


void main()
{
	scanf("%d",&sayi);
	deneme();
	printf("basamak sayisi: %d",basamak);
	
	
}
