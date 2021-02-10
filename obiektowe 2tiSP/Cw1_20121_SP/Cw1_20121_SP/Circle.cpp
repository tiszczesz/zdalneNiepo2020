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
	//todo zaimplementowac obliczanie odleglosci miedzy srodkami okregow
}




