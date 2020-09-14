#include<stdio.h>
int i,j,yildiz=1;
void main()
{
	for(i=0;i<6;i++)
	{
		for(j=0;j<yildiz;j++)
		{
			printf("*");
		}
		printf("\n");
		yildiz++;
	}
}
