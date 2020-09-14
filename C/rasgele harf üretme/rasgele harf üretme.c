#include<stdio.h>
#include<stdlib.h>
#include<time.h>
int seed;
char harf,HARF; //rasgele harf üretme.
void main()
{
	seed=time(NULL);
	srand(seed);
	
	harf=rand()%26+97;
	HARF=rand()%26+65;
	
	//65 ile 90 arasýnda sayý üretme.Not:(%90 yazýlýr ise max 89 üretilir.)
	//Burdaki ifadede 0 ile 26 arasýnda bir sayý üretilicek ve üretilen sayý 65 ile toplanacak.
	//Yani 0 üretilirse 65 ile toplýcak ve 26 üretilirse 65 ile toplayýp 91 çýkýcak.Kýsaca min 65 ve max 90 olucak.
	
	printf("uretilen kucuk harf: %c\n",harf);
	printf("uretilen buyuk HARF: %c",HARF);
}
