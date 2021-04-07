
#include <string>
#include <cstdio>

using namespace std;
void Ex1() {
	printf("Podaj swoj wiek: \n");
	int age = 22;
	double liczbaDouble = 56.12757;
	printf("Twoj wiek to: %o Calkiem sporo przezyles\n", age);
	printf("Twoja masa: %.2e Calkiem sporo przezyles\n", liczbaDouble);

	printf(" ============================================\n\n");
	printf("Podaj swoje imie: ");
	char imie[20];
	scanf_s("%s", imie,20);

	printf("Podaj swoje nazwisko: ");
	char nazwisko[50];
	scanf_s("%s", nazwisko, 50);

	printf("Podaj swoj wiek: ");
	int wiek;
	scanf_s("%d", &wiek);
	printf("Witaj %s %s masz wiek: %d", imie, nazwisko, wiek);
}
int NWDRek(int a, int b) {
	if (b == 0) return a;
	return NWDRek(b, a % b);
}
int NWDIter(int a, int b) {
	int temp;
	while(b!=0) {
		temp = a;
		a = b;
		b = temp % b;
	}
	return a;
}
void Ex2() {
	//todo nwd  45 60 --> 15 rekurencyjnie lub iteracyjnie bez cin cout (printf scanf_s)
	printf("Podaj a: ");
	int a;
	scanf_s("%d", &a);
	printf("Podaj b: ");
	int b;
	scanf_s("%d", &b);
	printf("NWDRek(%d,%d) = %d\n", a, b, NWDRek(a, b));
	printf("NWDIter(%d,%d) = %d\n", a, b, NWDIter(a, b));
}
int main() {
	//Ex1();
	Ex2();

	
	return 0;
}
