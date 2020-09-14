#include<stdio.h>
#include<time.h>
//1 ile 200 arasý 30 sayý üret.Üretilen sayýlardan 100'ün üstünde olanlarý ekrana yazdýr.
int rasgele,seed,i;
void main()
{
	seed=time(NULL); //seed kýsmý yazýlmassa üretilen randomlar hep ayný deðeri verir.
	srand(seed);
	
	for(i=0;i<30;i++)
	{
		rasgele=rand()%201+1;
		if(rasgele>100)
		printf("100 ustu olanlar: %d\n",rasgele);
	}
}
