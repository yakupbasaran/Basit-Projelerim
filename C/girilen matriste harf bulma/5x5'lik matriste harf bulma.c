#include<stdio.h>
//5x5'lik matriste bulunan harfler vardýr.Klavyeden bir harf giriyoruz.Eðer harf matrisin içinde bulunuyorsa ekrana yazýyoruz.
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
	
	for(i=0;i<5;i++) //i satýr sayýsýdýr.
	{                                     //Ýlk kýsýmda matrisi ekrana yazdýrmak için kurulan döngülerdir.
	for(j=0;j<5;j++) //j sütun sayýsýdýr.
		{
			printf("%c ",matris[i][j]);
		}
		printf("\n");
	}
	
	printf("Bir harf girin: ");
	scanf("%c",&harf1);
	
	for(x=0;x<5;x++) //Bu kýsýmdada matrisin tüm satýr ve sütunlarý kontrol edilir.Eðer girilen karakter matrisin içinde varsa ekrana yazdýrýlýr.
	{
		for(y=0;y<5;y++)
		{
			if(harf1==matris[x][y])
	
		printf("Harfiniz tabloda mevcuttur: %c",matris[x][y]);
		}
	}	
}
