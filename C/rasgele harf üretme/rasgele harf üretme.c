#include<stdio.h>
#include<stdlib.h>
#include<time.h>
int seed;
char harf,HARF; //rasgele harf �retme.
void main()
{
	seed=time(NULL);
	srand(seed);
	
	harf=rand()%26+97;
	HARF=rand()%26+65;
	
	//65 ile 90 aras�nda say� �retme.Not:(%90 yaz�l�r ise max 89 �retilir.)
	//Burdaki ifadede 0 ile 26 aras�nda bir say� �retilicek ve �retilen say� 65 ile toplanacak.
	//Yani 0 �retilirse 65 ile topl�cak ve 26 �retilirse 65 ile toplay�p 91 ��k�cak.K�saca min 65 ve max 90 olucak.
	
	printf("uretilen kucuk harf: %c\n",harf);
	printf("uretilen buyuk HARF: %c",HARF);
}
