 #include<stdio.h> //5x5'lik bir matrisimiz var.Bu matrisin i�inde harfler var.Bir kelime giriyoruz.Girilen kelime matris i�inde varsa ekrana yaz�cak.(Kelime matriste yatay yada dikey bulunabilir ama �apraz bulunamaz.)
int i,j,k,a,b,c,d;
char dizi[5],harf;
void main()
{
	char matris[5][5]={       //5x5'lik bir matris tan�mlay�p i�ine harfleri aktar�yoruz.
	
	{'S','R','T','O','S'},
	{'X','K','A','R','I'},
	{'S','E','B','I','L'},
	{'N','U','L','Q','G'},
	{'B','J','O','K','I'}
	
	};
	//16-25 komut sat�rlar� aras�ndaki kodlar matrisi ekrana yazd�rmak i�in.
	for(i=0;i<5;i++)  //D�� d�ng�deki for komutunun i�indeki 'i' de�eri matrisin sat�rlar�n� ifade eder.
	{
		for(j=0;j<5;j++)  //�� d�ng�deki for komutunun i�indeki 'j' de�eri matrisin sut�nlar�n� ifade eder.
		{
			printf("%c ",matris[i][j]); //Matrisin i�indeki 0x0 olan indisi sonra 0x1 olan indisi.... yazd�rarak ve bo�luk atarak devam eder.
		}
		printf("\n"); //�� d�ng�deki for bittikten sonra ilk sat�r�n 5 s�tunuda bo�luk burak�larak yaz�lm�� olucak.Sonra d�� d�ng�deki forda i'nin de�eri bir artmadan �nce alt sat�ra ge�ilicek.
	}
	
	printf("\n");
	printf("Bir kelime giriniz.(Max. 5 harf): "); //Kullan�c�dan bir kelime girmesini istiyoruz max 5 harf olucak �ekilde.
	
	for(k=0;k<5;k++) //Buradaki d�ng�de girilen her de�eri dizinin indislerine bir artt�rarak yerle�tiriyoruz.
	{
	scanf("%c",&harf);
	dizi[k]=harf;
	}
	
	//35-46 komut sat�rlar� aras�ndaki kodlarda girilen kelime matriste yatay olarak aranmaktad�r.
	for(a=0;a<5;a++) //'a' matrisin sat�rlar�n� 'b' ise s�tunlar�n� temsil etmekte.
	{
		for(b=0;b<5;b++)
		{
			if(dizi[0]==matris[a][b] && dizi[1]==matris[a][b+1] && dizi[2]==matris[a][b+2] && dizi[3]==matris[a][b+3] && dizi[4]==matris[a][b+4])
			{ //'�f'deki kar��la�t�rmalarda girilen kelimeyi matris i�indeki harfler ile s�ras�yla kar��la�t�r�r.SEBIL kelimesinde once 'S' harfine bakar.'S' varsa sonras�nda 'E' harfini kontrol eder...
			 // Kar��la�t�rmadaki b, b+1 , b+2 , b+3 , b+4  yatay olarak girilen kelimeyi aramak i�in.	
				printf("\n");
				printf("Girdiginiz kelime yatay olarak bulunuyor.\n");
				printf("Satir Numarasi: %d",a+1); //a+1 vermemizin sebebi 1.sat�r� a verseydik ��kt�da indis nosunu yani 0 g�sterecekti.
			}
		}
	}
	
	for(c=0;c<5;c++) //Matrisin sat�rlar�.
	{
		for(d=0;d<5;d++) //Matrisin s�tunlar�.
		{
			if(dizi[0]==matris[c][d] && dizi[1]==matris[c+1][d] && dizi[2]==matris[c+2][d] && dizi[3]==matris[c+3][d] && dizi[4]==matris[c+4][d] )
			{  //Burada yap�lan kar��la�t�rmalar ise girilen kelimeyi dikey olarak aramam�z� sa�l�yor.
				printf("\n");
				printf("Girdiginiz kelime dikey olarak bulunuyor.\n");
				printf("Sutun Numarasi: %d",d+1); // 'de' de�erini bir ile toplamam�z�n sebebi indis numaras� yerine s�tun numaras�n� g�stermesini istememiz.
			}
		}
	}
}
