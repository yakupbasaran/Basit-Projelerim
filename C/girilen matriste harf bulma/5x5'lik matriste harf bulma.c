#include<stdio.h>
//5x5'lik matriste bulunan harfler vard�r.Klavyeden bir harf giriyoruz.E�er harf matrisin i�inde bulunuyorsa ekrana yaz�yoruz.
int sayi,i,j,x,y;
char harf1,harf2,harf3;
void main()
{
	
	char matris[5][5]={ 
	{'a','l','i','f','p'},
	{'b','d','g','x','t'},
	{'c','y','x','s','e'},
	{'j','k','u','f','g'},
	{'p','s','h','i','o'} };
	
	for(i=0;i<5;i++) //i sat�r say�s�d�r.
	{                                     //�lk k�s�mda matrisi ekrana yazd�rmak i�in kurulan d�ng�lerdir.
	for(j=0;j<5;j++) //j s�tun say�s�d�r.
		{
			printf("%c ",matris[i][j]);
		}
		printf("\n");
	}
	
	printf("Bir harf girin: ");
	scanf("%c",&harf1);
	
	for(x=0;x<5;x++) //Bu k�s�mdada matrisin t�m sat�r ve s�tunlar� kontrol edilir.E�er girilen karakter matrisin i�inde varsa ekrana yazd�r�l�r.
	{
		for(y=0;y<5;y++)
		{
			if(harf1==matris[x][y])
	
		printf("Harfiniz tabloda mevcuttur: %c",matris[x][y]);
		}
	}	
}
