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
	cout << b2;
	b1.data[0]=9999;
	cout << b1;
	cout << b2;
	return 0;
}