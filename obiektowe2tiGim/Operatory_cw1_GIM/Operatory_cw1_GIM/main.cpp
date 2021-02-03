#include <iostream>
#include <cstdlib>
#include "Point.h"
#include "Circle.h"

using namespace std;
void cw1();
void cw2();
int main() {
	//cw1();
	cw2();
	return 0;
}

void cw1() {
	Point p1(3, 4);
	Point p2(2, 6);
	cout << p1 << endl;
	cout << p1 << " + " << p2 << " = " << (p1 + p2) << endl;
	cout << p1 << " - " << p2 << " = " << (p1 - p2) << endl;
	cout << "odleglosc " << p1 << " (0,0) " << " = " << p1.Distance() << endl;
	cout << "odleglosc " << p1 << " i " << p2 << " = " << p1.Distance(p2) << endl;
}
void cw2() {
	Circle c1;
	Point p2(4, 8);
	Circle c2(10, p2);
	cout << c1 << endl;
	cout << c2 << endl;
}