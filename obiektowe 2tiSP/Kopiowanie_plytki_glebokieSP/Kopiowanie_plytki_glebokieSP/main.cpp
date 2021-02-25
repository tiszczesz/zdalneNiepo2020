#include <iostream>
#include <cstdlib>
#include "Box.h"
using namespace std;
int main() {
	cout << "Podaj rozmiar Boxa: ";
	int size;
	cin >> size;
	Box b1(size);
	cout << b1;
	Box b2 = b1;
	Box b3;
	b3 = b1;
	cout << b2;
	cout << b3;
	b1.data[0]=9999;
	b2.data[3] = 1111;
	b3.data[b3.GetSize() - 1] = 777777;
	cout << b1;
	cout << b2;
	cout << b3;
	return 0;
	//todo napisac klase posiadajaca dynamiczna tablice stringów (imina)
	//todo zdefiniowac operator = oraz konstrutor kopiujacy aby
	//todo nastapilo gleboki kopiowanie tych imion
}