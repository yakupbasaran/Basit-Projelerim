#include<stdio.h>
#include<time.h>
//2 oyuncu toplam 30 olucak �ekilde 15'er defa kar��l�kl� olarak 2 zar at�yor.En fazla �ift atan oyuncuyu ekrana yazan program� yaz�n�z.
int oyuncu1,oyuncu2,zar1,zar2,zar3,zar4,i,seed;
void main()
{
	
	seed=time(NULL);
	srand(seed);
	
	for(i=0;i<15;i++)
	{
		zar1=rand()%6+1; //Zar oldu�u i�in 1 ile 6 aras� de�er al�cak.
		zar2=rand()%6+1;
		if(zar1==zar2)  //�ift kar��la�t�rmas� yap�l�yor ve gelen de�erler �ift ise oyunculara puan veriliyor.
		oyuncu1++;
		zar3=rand()%6+1;
		zar4=rand()%6+1;
		if(zar3==zar4)
		oyuncu2++;
		
	}
	if(oyuncu1>oyuncu2)
	printf("oyuncu1 kazandi: %d",oyuncu1);
	else if(oyuncu1==oyuncu2)
	printf("Berabere");
	else
	printf("oyuncu2 kazandi: %d",oyuncu2);
}
