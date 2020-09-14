 #include<stdio.h> //5x5'lik bir matrisimiz var.Bu matrisin içinde harfler var.Bir kelime giriyoruz.Girilen kelime matris içinde varsa ekrana yazýcak.(Kelime matriste yatay yada dikey bulunabilir ama çapraz bulunamaz.)
int i,j,k,a,b,c,d;
char dizi[5],harf;
void main()
{
	char matris[5][5]={       //5x5'lik bir matris tanýmlayýp içine harfleri aktarýyoruz.
	
	{'S','R','T','O','S'},
	{'X','K','A','R','I'},
	{'S','E','B','I','L'},
	{'N','U','L','Q','G'},
	{'B','J','O','K','I'}
	
	};
	//16-25 komut satýrlarý arasýndaki kodlar matrisi ekrana yazdýrmak için.
	for(i=0;i<5;i++)  //Dýþ döngüdeki for komutunun içindeki 'i' deðeri matrisin satýrlarýný ifade eder.
	{
		for(j=0;j<5;j++)  //Ýç döngüdeki for komutunun içindeki 'j' deðeri matrisin sutünlarýný ifade eder.
		{
			printf("%c ",matris[i][j]); //Matrisin içindeki 0x0 olan indisi sonra 0x1 olan indisi.... yazdýrarak ve boþluk atarak devam eder.
		}
		printf("\n"); //Ýç döngüdeki for bittikten sonra ilk satýrýn 5 sütunuda boþluk burakýlarak yazýlmýþ olucak.Sonra dýþ döngüdeki forda i'nin deðeri bir artmadan önce alt satýra geçilicek.
	}
	
	printf("\n");
	printf("Bir kelime giriniz.(Max. 5 harf): "); //Kullanýcýdan bir kelime girmesini istiyoruz max 5 harf olucak þekilde.
	
	for(k=0;k<5;k++) //Buradaki döngüde girilen her deðeri dizinin indislerine bir arttýrarak yerleþtiriyoruz.
	{
	scanf("%c",&harf);
	dizi[k]=harf;
	}
	
	//35-46 komut satýrlarý arasýndaki kodlarda girilen kelime matriste yatay olarak aranmaktadýr.
	for(a=0;a<5;a++) //'a' matrisin satýrlarýný 'b' ise sütunlarýný temsil etmekte.
	{
		for(b=0;b<5;b++)
		{
			if(dizi[0]==matris[a][b] && dizi[1]==matris[a][b+1] && dizi[2]==matris[a][b+2] && dizi[3]==matris[a][b+3] && dizi[4]==matris[a][b+4])
			{ //'Ýf'deki karþýlaþtýrmalarda girilen kelimeyi matris içindeki harfler ile sýrasýyla karþýlaþtýrýr.SEBIL kelimesinde once 'S' harfine bakar.'S' varsa sonrasýnda 'E' harfini kontrol eder...
			 // Karþýlaþtýrmadaki b, b+1 , b+2 , b+3 , b+4  yatay olarak girilen kelimeyi aramak için.	
				printf("\n");
				printf("Girdiginiz kelime yatay olarak bulunuyor.\n");
				printf("Satir Numarasi: %d",a+1); //a+1 vermemizin sebebi 1.satýrý a verseydik çýktýda indis nosunu yani 0 gösterecekti.
			}
		}
	}
	
	for(c=0;c<5;c++) //Matrisin satýrlarý.
	{
		for(d=0;d<5;d++) //Matrisin sütunlarý.
		{
			if(dizi[0]==matris[c][d] && dizi[1]==matris[c+1][d] && dizi[2]==matris[c+2][d] && dizi[3]==matris[c+3][d] && dizi[4]==matris[c+4][d] )
			{  //Burada yapýlan karþýlaþtýrmalar ise girilen kelimeyi dikey olarak aramamýzý saðlýyor.
				printf("\n");
				printf("Girdiginiz kelime dikey olarak bulunuyor.\n");
				printf("Sutun Numarasi: %d",d+1); // 'de' deðerini bir ile toplamamýzýn sebebi indis numarasý yerine sütun numarasýný göstermesini istememiz.
			}
		}
	}
}
