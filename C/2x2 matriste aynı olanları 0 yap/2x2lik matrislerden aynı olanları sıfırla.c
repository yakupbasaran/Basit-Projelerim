#include<stdio.h>
int i,j,a,b,c,d;  //2x2'lik iki matriste ayn� olanlar� 0 yapan program� yaz�n�z.
void main()
{
	
	int matris1[2][2]={{2,3} , {4,5}};  //�ki matrisede de�erlerimizi giriyoruz.
	
	int matris2[2][2]={{6,3} , {4,9}};

for(i=0;i<2;i++)
{
	for(j=0;j<2;j++)
	{
		if(matris1[i][j]==matris2[i][j])  //matris1'deki her indisi matris2 ile kar��la�t�r�yoruz.
		{
			matris1[i][j]=0; matris2[i][j]=0; //E�er 2 matristede ayn� olan de�erler varsa onlara 0 de�eri at�yoruz.
		}
	}
}

for(a=0;a<2;a++)
{
	for(b=0;b<2;b++)
	{
		printf("%d ",matris1[a][b]);  //Matris1'i yazd�r�yoruz.
	}
	printf("\n");
}

printf("\n");printf("\n");

for(c=0;c<2;c++)
{
	for(d=0;d<2;d++)
	{
		printf("%d ",matris2[c][d]); //Matris2'yi yazd�r�yoruz.
	}
	printf("\n");
}

}
