
#include <cstdio>
#include <string>

using namespace std;
void Ex1();
void Ex2();
int main() {
   // Ex1();
    Ex2();
	return 0;
}
void Ex1() {
	 std::printf("Strings:\n");

    const char* s = "Hello";
    string napis = "Ala ma kota";
    int liczba{ 1233343433434343434 };
    float liczba2{ 34.8989f };
    double liczbaDouble = 456.895;
    bool c = false;
    printf("Moja zmienna s = %s\n", s);   //cout << a
    printf("Moja zmienna napis = %s\n", napis.c_str());
    printf("Moja liczba = %i\n", liczba);
    printf("Moja liczba = %.2f\n", liczba2);
    printf("Moja liczba = %.2e\n", liczba2);
    printf("Moja liczba double = %.2lf\n", liczbaDouble);
    printf("%d", c );

    printf("Podaj swoj wiek: ");
    int age;
    scanf_s("%d", &age);
	
	
    printf("Podales wiek %i", age);

	printf(" -------------------------------------------------------\n\n");
   
	
    printf("Podaj swoje imie: ");
    char imie[50];
    scanf_s("%s", imie,50);

    printf("Podaj swoje nazwisko: ");
    char nazwisko[50];
    scanf_s("%s", &nazwisko,50);

    printf_s("Witaj %s  %s twoj wiek: %i", imie, nazwisko, age);
	
}
void Ex2() {
	//todo algorytm NWD(16,24) --> 8
	// todo inny algorytm np silnia 
	//dowolna metoda iteracyjna lub rekurencyjna
	//bez iostream tylko cstdio
	//dla  ambitnych z wyborem metody rekuren lub iterac
	
}