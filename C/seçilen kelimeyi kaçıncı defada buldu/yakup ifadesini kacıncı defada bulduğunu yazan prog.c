#include<stdio.h>
#include<time.h>
//Rasgele 5 tane harf �reticez.Yakup ifadesini ka��nc� defada buldu�unu yazan program.
int seed,i,sayac;
char harf1,harf2,harf3,harf4,harf5;
void main()
{
	seed=time(NULL);
	srand(seed);
	
	//YAKUP ismini �retmek i�in:
	
	i=1;
  
	while(i>0) //Bulana kadar d�nmesi i�in bir sonsuz d�ng� olu�turuyoruz.
	{
		harf1=rand()%26+65; //5 tane harfi rasgele �retebilmek i�in
		harf2=65+rand()%26;
		harf3=65+rand()%26;
		harf4=65+rand()%26;
		harf5=65+rand()%26;
		sayac++; //Ka��nc� defada buldu�unu ��renebilmek i�in her denemede 1 arttan sayac olu�turuyoruz.
		
		
		if(harf1==89&&harf2==65&&harf3==75&&harf4==85&&harf5==80) //YAKUP isminin karakterlerinin ascii'leri ile yakal�yoruz.
		{
			printf("%d. denemede bulundu.\n",sayac);
			printf("%c%c%c%c%c",harf1,harf2,harf3,harf4,harf5);
			
			break; //Yakalad�ktan sonra sonsuz d�ng�den ��kmak i�in break kullan�yoruz.
		}
	}
}
