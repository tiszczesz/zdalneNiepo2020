#include <iostream>
#include <string>
#include <vector>
#include <ctime>
#include <cstdlib>
using namespace std;
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

bool isPrimeNumber(int number) {
	if (number <= 1) return false;
	for(int i=2; i*i<=number;i++) {
		if (number % i == 0) return false;
	}
	return true;
}
vector<int> GetPrimeNumbers(unsigned int ile) {
	vector<int> numbers;
	srand(time(0));
	while(numbers.size()<ile) {
		int liczba = rand() % 10000;
		if(isPrimeNumber(liczba)) {
			numbers.push_back(liczba);
		}
	}
	return numbers;
}
void ShowNumbers(vector<int> numbers) {
	for (auto number : numbers) {
		cout << number << " ";
	}
}