#include <iostream>
#include <cstdlib>
#include "Box.h"
using namespace std;

int main() {
	cout << "Podaj rozmiar pudelka: ";
	int size;
	cin >> size;
	Box b1(size);
	Box b2 = b1; // Box b2(b1);
	Box b3;
	b3 = b1;
	cout << b1;
	cout << b2;
	cout << b3;
	cout << " ============ zmieniamy zawartosc pudelka b2 ======\n";
	b2.data[0] = 5555;
	b1.data[b1.GetSize() - 1] = 7777;
	b3.data[2] = 11111;
	cout << b1;
	cout << b2;
	cout << b3;
	return 0;
	//todo napisac notatnik z nazwisakmi zapisanymi w tablicy dynamicznej  string* nazwiska = new string[size]
}