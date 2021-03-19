
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
void Ex2() {
	//todo nwd  45 60 --> 15 rekurencyjnie lub iteracyjnie bez cin cout (printf scanf_s)
}
int main() {
	Ex1();


	
	return 0;
}
