#include <iostream>
#include <string>

int Dodaj(int a,int b) {
	return a + b;
}

std::string Wizytowka(std::string imie,std::string nazwisko) {
	return "Witaj: " + imie + " " + nazwisko;
}

void Licz(int ile) {
	for(auto i=0;i<ile;i++) {
		std::cout << "Liczymy: " << i << std::endl;
	}
}