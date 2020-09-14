#include<stdio.h>
#include<stdlib.h>
#include<time.h>

int a,b,c,d,i,j,seed;   //5x5'lik bir matrisin  içine 10 ile 99 arasý rasgele deðerler atama.
void main()
{
	seed=time(NULL);
	srand(seed);
	
	
	int matris[5][5];
	
	for(i=0;i<5;i++)
	{
		for(j=0;j<5;j++)
		{
			matris[i][j]=rand()%89+10;  //Matrisin her indisine sýrayla rasgele deðerler atanýyor.
		}
	}
	
	for(a=0;a<5;a++)
	{
		for(b=0;b<5;b++)
		{
			
			printf("%d ",matris[a][b]);  //Matris yazdýrýlýyor.
			
		}
		
		printf("\n");
	}
	
}
