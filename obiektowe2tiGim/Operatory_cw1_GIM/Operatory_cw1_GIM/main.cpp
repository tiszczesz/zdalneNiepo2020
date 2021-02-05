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
	Point p3(10, 12);
	Circle c2(4, p2);
	Circle* c3 = new Circle(2, p3);
	cout << c1 << endl;
	cout << c2 << endl;
	cout << (*c3) << endl;
//	c1.Info();
//	c2.Info();
//	c3->Info();
//	(*c3).Info();

	if((*c3).IsCenterIn(c2)) {
		cout << "Srodek " << c2 << " wewnatrz " << (*c3) << endl;
	}else {
		cout << "Srodek " << c2 << " nie wewnatrz " << (*c3) << endl;
	}

	if (c2.IsCenterIn((*c3))) {
		cout << "Srodek " << (*c3) << " wewnatrz " << c2 << endl;
	}
	else {
		cout << "Srodek " << (*c3) << " nie wewnatrz " << c2 << endl;
	}
	//todo dynamiczny obiekt Kolo i uzycie << oraz metody Info()
	delete c3;
	c3 = nullptr;
}