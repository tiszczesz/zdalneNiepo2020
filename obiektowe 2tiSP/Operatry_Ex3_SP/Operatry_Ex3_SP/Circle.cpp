#define _USE_MATH_DEFINES
#include "Circle.h"
#include <cmath>

Circle::Circle():radius(0) {}
Circle::Circle(double radius, Point center) {
	this->radius = radius;
	this->center = center;
}
std::ostream& operator<<(std::ostream& os, const Circle& c) {
	os << "Okrag o promieniu: " << c.radius << " ma srodek: " << c.center;
	return os;
}
double Circle::Area() {
	
	return M_PI * radius * radius;
}
double Circle::Circuit() {
	return 2 * M_PI * radius;
}
void Circle::Info() {
	std::cout << (*this) << std::endl;
	std::cout << " obwod kola: " << Circuit() << " pole powierzchni: "
		<< Area() << std::endl;
}
double Circle::Distance(const Circle& c) {
	return center.Distance(c.center);
}
bool Circle::IsCenterInOther(const Circle& c) {
	return Distance(c) <= c.radius; //czy nasze kolo ma srodek wewnatrz kola c
}
bool Circle::IsOtherCenterInside(const Circle& c) {
	return Distance(c) <= radius; //czy kolo c ma srodek wewnatrz naszego
}
//todo czy nasze kolo w calosci jest w kole c  -->sprawdzic w main.cpp
bool Circle::IsThisInOther(const Circle& c) { 
	return Distance(c) + radius <= c.radius;
}
//todo czy inne kolo w calosci jest w naszym -->sprawdzic w main.cpp
bool Circle::IsOtherInThis(const Circle& c) {
	return Distance(c) + c.radius <= radius;
}








