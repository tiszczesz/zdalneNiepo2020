#include <iostream>
#include <cstdlib>
#include "Point.h"
using namespace std;

int main() {
	Point p1(14,5.9);
	Point p2(-1,4);
	Point p3(3, 4);
	cout << p1 << endl;
	cout << p2 << endl;   // p1+p2
	cout << p1 << " + " << p2 << " = " << (p1 + p2) << endl;
	cout << "Odleglosc punktu: " << p3 << " wynosi: " << p3.Distance() << endl;
	return 0;
}