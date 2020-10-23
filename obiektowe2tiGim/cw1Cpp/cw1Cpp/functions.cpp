#include <iostream>
#include <string>
#include <vector>
#include <ctime>
#include <cstdlib>

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

bool isPrime(int number) {
	if (number <= 1) return false;
	for(int i=2; i*i <= number;i++) {
		if (number % i == 0) return false;
	}
	return true;
}
std::vector<int> getPrimes(unsigned int limit) {
	std::vector<int> primes;
	srand(time(0));
	while(primes.size()<limit) {
		int number = rand() % 1000;
		if(isPrime(number)) {
			primes.push_back(number);
		}
	}
	return primes;
}
void showPrimes(std::vector<int> primes) {
	for (auto value : primes) {
		std::cout << value << " ";
	}
}
