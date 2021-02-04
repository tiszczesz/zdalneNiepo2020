#include <iostream>
#include <cstdlib>
#include "Point.h"
#include "Circle.h"
using namespace std;
void ex1();
void ex2();
int main() {
	//ex1();
	ex2();
	return 0;
}
void ex1() {
	Point p1(14, 5.9);
	Point p2(-1, 4);
	Point p3(3, 4);
	Point p4(0, 0);
	cout << p1 << endl;
	cout << p2 << endl;   // p1+p2
	cout << p1 << " + " << p2 << " = " << (p1 + p2) << endl;
	cout << p1 << " - " << p2 << " = " << (p1 - p2) << endl;
	cout << "Odleglosc punktu: " << p3 << " wynosi: " << p3.Distance() << endl;
	cout << "Odleglosc " << p3 << " od " << p2 << " wynosi: " << p3.Distance(p2) << endl;
	cout << "Odleglosc " << p3 << " od " << p4 << " wynosi: " << p4.Distance(p3) << endl;
}

void ex2() {
	Circle c1;
	Point p3(3, 4);
	cout << c1 << endl;
	Circle c2(10, p3);
	cout << c2 << endl;
	c1.Info();
	c2.Info();
}