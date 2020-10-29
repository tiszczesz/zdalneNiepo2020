#include <string>
#include <vector>
#include <iostream>
#include "MyHeaders.h"
using namespace std;
void Ex1() {
	cout << Dodaj(4, 9) << endl;
	cout << Wizytowka("Alojzy", "Gabka") << endl;
	Licz(30);
}
void Ex2() {
	vector<int> numbers;
	numbers.push_back(12);
	numbers.push_back(6);
	numbers.push_back(-5);
	numbers.push_back(44);
	for(auto i=1;i<20;i++) {
		numbers.push_back(i * 7);
	}
	cout << "rozmiar wektora: " << numbers.size() << endl;
	for (auto number : numbers) {
		cout << number << " ";
	}
}
void Ex3() {
	vector<string> napisy{ "aaaa","fffff","sfsfsfsf","dg dg dg d ","ffff" };
	cout << "rozmiar wektora: " << napisy.size() << endl;
	for (auto item : napisy) {
		cout << item << "| ";
	}
}
void Ex4() {
	cout << "Prosze podac ilosc liczb pierwszych: ";
	unsigned int ile;
	cin >> ile;
	vector<int> dane = getPrimes(ile);
	showPrimes(dane);
	cout << "Podaj ilosc liczb losowych: ";
	cin >> ile;
	vector<int> losowe = GetRandoms(ile);
	showPrimes(losowe);
}
void Ex5() {
	cout << "Ile chcesz liczb: ";
	int ile;
	cin >> ile;
	cout << "Przez ile maja byc podzielne: ";
	int div;
	cin >> div;
	vector<int> dane = GenerDividedBy(ile, div);
	showPrimes(dane);
}
int main()
{
	//Ex1();
	//Ex2();
	//Ex3();
	//Ex4();
	//todo Ex5 - generator liczb podzielnych przez np 3 (ogolnie przez liczbe podana jako argument funkcji
	Ex5();
	return 0;
}

