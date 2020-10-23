#include <iostream>
#include <vector>
#include "MyHeader.h"

using namespace std;
void Ex1() {
	cout << HelloFromFile("ala ma kota") << endl;
	cout << HelloFromFile("dfs sf s fsf sf s fs") << endl;
	cout << "Podaj a: ";
	int a;
	cin >> a;
	cout << "Podaj b: ";
	int b;
	cin >> b;
	cout << a << " + " << b << " = " << Dodaj(a, b) << endl;
	cout << "Przez ile podzielne: ";
	int podz;
	cin >> podz;
	Wyswietl(podz);
}
void Ex2() {
	vector<int> liczby;
	vector<string> wyrazy = { "eewrrw","trtrtr","tttttt" };
	cout << "Ile chcesz podac liczb: ";
	int ile;
	cin >> ile;
	ile = ile < 0 ? -ile : ile;
	int liczba;
	for(auto i=0;i<ile;i++) {
		cout << "Podaj liczbe (" << (i + 1) << " z " << ile << "): ";
		cin >> liczba;
		liczby.push_back(liczba);
	}
	for(auto i=0;i<liczby.size();i++) {
		cout << liczby[i] << " ";
	}
}
void Ex3() {
	cout << "Ile losowych liczb pierwszych: ";
	unsigned int ile;
	cin >> ile;
	vector<int> primes = GetPrimeNumbers(ile);
	ShowNumbers(primes);
}
int main()
{
	//Ex1();
	//Ex2();
	Ex3();
    return 0;
}

