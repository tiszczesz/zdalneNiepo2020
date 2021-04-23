#include <iostream>
#include <string>

#include "Circle.h"
using namespace std;

int main() {
	Point p1(3,5);// (3, 6);
	Circle c1(10, p1);
	//std::cout << c1 << endl;
	Point p2(3,5);
	Circle c2(20,p2);
	if(c1 < c2) {
		cout << c1 << endl;
	}else {
		cout << c2 << endl;
	}
	if (c1==c2) {
		cout << "Kola sa rowne " << c1 << endl<<c2 << endl;
	}else {
		cout << "Kola nie sa rowne " << c1 << endl << c2 << endl;
	}
	if(p1==p2) {
		cout << "punkty jednakowe: " << p1 << endl << p2 << endl;
	}
	else {
		cout << "punkty nie jednakowe: " << p1 << "  " << p2 << endl;
	}
	return 0;

	//todo przeciazyc operator < i > tak aby kolko o wiekszym promieniu bylo wieksze
	//todo przeciazyc operator porownania == tak aby kolka byly jednakowe gdy maja taki sam promien
	//todo oraz taki sam punkt srodkowy  (przeciazyc operator == w Point
}