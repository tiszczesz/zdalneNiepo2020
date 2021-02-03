#include "Circle.h"

Circle::Circle() {
	 
}
Circle::Circle(double radius, Point p) {
	this->radius = radius;
	center = p;
}

std::ostream& operator<<(std::ostream& os, const Circle& c) {
	os << "Srodek kola: " << c.center << " i promien: " << c.radius;
	return os;
}

