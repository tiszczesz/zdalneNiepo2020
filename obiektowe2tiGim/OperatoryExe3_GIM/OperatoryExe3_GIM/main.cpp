#include <iostream>
#include <string>

#include "Circle.h"
using namespace std;

int main() {
	Point p1(3, 6);
	Circle c1(10, p1);
	//std::cout << c1 << endl;
	Point p2;
	Circle c2(20,p2);
	if(c1 > c2) {
		cout << c1 << endl;
	}else {
		cout << c2 << endl;
	}
	return 0;

	//todo przeciazyc operator < i > tak aby kolko o wiekszym promieniu bylo wieksze
	//todo przeciazyc operator porownania == tak aby kolka byly jednakowe gdy maja taki sam promien
	//todo oraz taki sam punkt srodkowy  (przeciazyc operator == w Point
}