#include<stdio.h>
#include<stdlib.h>
#include<time.h>

int i,j,c=6,yildiz=0,bosluk;
void main()
{
	
	
	
	bosluk=c;
	
	for(i=0;i<c;i++)
	{
		for(j=0;j<bosluk;j++)
		{
			printf("*");
		}
		for(i=0;i<yildiz;i++)
		{
			printf(".");
		}
		printf("\n");
		bosluk--;
		yildiz++;
	}
	
	
	
}
