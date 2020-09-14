#include<stdio.h>

int i,j,z,k;
int dizi[4];
void main()
{
	int matris[4][4]={{11,12,13,14},{15,16,17,18},{19,20,21,22},{23,24,25,26}};
	
	for(i=0;i<4;i++)
	{
		for(j=0;j<4;j++)
		{
			printf("%d ",matris[i][j]);
		}
		printf("\n");
	}
	printf("\n");
	
	for(i=0;i<2;i++)
	{
		for(j=2;j<4;j++)
		{
			dizi[z]=matris[i][j];
			z++;
			matris[i][j]=matris[i+2][j-2];
			
		}
	}
	
	for(i=2;i<4;i++)
	{
		for(j=0;j<2;j++)
		{
			matris[i][j]=dizi[k];
			k++;
		}
	}
	
	for(i=0;i<4;i++)
	{
		for(j=0;j<4;j++)
		{
			printf("%d ",matris[i][j]);
		}
		printf("\n");
	}
	
}
