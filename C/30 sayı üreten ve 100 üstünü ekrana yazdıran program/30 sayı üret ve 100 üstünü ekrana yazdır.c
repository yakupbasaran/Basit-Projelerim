#include<stdio.h>
#include<time.h>
//1 ile 200 aras� 30 say� �ret.�retilen say�lardan 100'�n �st�nde olanlar� ekrana yazd�r.
int rasgele,seed,i;
void main()
{
	seed=time(NULL); //seed k�sm� yaz�lmassa �retilen randomlar hep ayn� de�eri verir.
	srand(seed);
	
	for(i=0;i<30;i++)
	{
		rasgele=rand()%201+1;
		if(rasgele>100)
		printf("100 ustu olanlar: %d\n",rasgele);
	}
}
