#include <iostream>
#include <string>
std::string HelloFromFile(std::string text) {
	return "Witaj z pliku z trescia: " + text;
}
int Dodaj(int a,int b) {
	return a + b;
}
void Wyswietl(int podz) {
	for(int i=1;i<=20;i++) {
		std::cout << podz * i << " ";
	}
	std::cout << std::endl;
}