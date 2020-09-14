#include<stdio.h>
#include<time.h>
//Rasgele 5 tane harf üreticez.Yakup ifadesini kaçýncý defada bulduðunu yazan program.
int seed,i,sayac;
char harf1,harf2,harf3,harf4,harf5;
void main()
{
	seed=time(NULL);
	srand(seed);
	
	//YAKUP ismini üretmek için:
	
	i=1;
  
	while(i>0) //Bulana kadar dönmesi için bir sonsuz döngü oluþturuyoruz.
	{
		harf1=rand()%26+65; //5 tane harfi rasgele üretebilmek için
		harf2=65+rand()%26;
		harf3=65+rand()%26;
		harf4=65+rand()%26;
		harf5=65+rand()%26;
		sayac++; //Kaçýncý defada bulduðunu öðrenebilmek için her denemede 1 arttan sayac oluþturuyoruz.
		
		
		if(harf1==89&&harf2==65&&harf3==75&&harf4==85&&harf5==80) //YAKUP isminin karakterlerinin ascii'leri ile yakalýyoruz.
		{
			printf("%d. denemede bulundu.\n",sayac);
			printf("%c%c%c%c%c",harf1,harf2,harf3,harf4,harf5);
			
			break; //Yakaladýktan sonra sonsuz döngüden çýkmak için break kullanýyoruz.
		}
	}
}
