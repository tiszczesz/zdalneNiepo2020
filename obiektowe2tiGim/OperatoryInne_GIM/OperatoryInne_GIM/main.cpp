#include <iostream>
#include <cstdio>
#include <string>

using namespace std;

int main() {

    std::printf("Strings:\n");

    const char* s = "Hello";
    string napis = "Ala ma kota";
    int liczba = 123;
    float liczba2 = 34.8989;
    bool c = false;
    printf("Moja zmienna s = %s\n", s);   //cout << a
    printf("Moja zmienna napis = %s\n", napis.c_str());
    printf("Moja liczba = %i\n", liczba);
    printf("Moja liczba = %.2f\n", liczba2);
    printf("%d", c );
	return 0;
}