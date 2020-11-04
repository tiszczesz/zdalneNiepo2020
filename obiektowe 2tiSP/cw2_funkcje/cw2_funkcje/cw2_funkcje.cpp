
#include <iostream>
#include <vector>

#include "Header.h"
using namespace std;
void Swap1(int a, int b) { //przekazywanie args przez wartosc (kopiowanie)
	int temp = a;
	a = b;
	b = temp;
	cout << " a = " << a << " b = " << b << endl;
}
void Swap2(int* a, int* b) {//przekazywanie args przez wskaznik 
	int temp = *a;
	*a = *b;
	*b = temp;
	cout << " a = " << *a << " b = " << *b << endl;
}
void Swap3(int& a, int& b) { //przekazywanie args przez referencje (bez kopiowania)
	int temp = a;
	a = b;
	b = temp;
	cout << " a = " << a << " b = " << b << endl;
}
void Ex1() {
	int liczba1 = 23;
	int liczba2 = -99;
	//Swap1(liczba1, liczba2);
	//Swap2(&liczba1, &liczba2);
	Swap3(liczba1, liczba2);
	cout << "liczba1 = " << liczba1 << " liczba2  = " << liczba2 << endl;
}
void Ex2() {
	cout << "Podaj rozmiar wektora: ";
	int size;
	cin >> size;
	vector<int> liczby = GenerVec(size);
	ShowAll(liczby);
	//cout << "index = " << GetMax(liczby, 0) << endl;
	//SortWyb(liczby);
	//jakas wasza funkcja
	cout << "po posortowaniu: " << endl;
	ShowAll(liczby);
}
int main()
{
	//Ex1();
	Ex2();
	return 0;
}


