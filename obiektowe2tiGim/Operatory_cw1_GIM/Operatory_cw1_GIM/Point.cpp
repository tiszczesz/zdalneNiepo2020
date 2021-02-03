#include "Point.h"
#include <cmath>

Point::Point(double x, double y) {
	this->x = x;
	this->y = y;
}
std::string Point::Info() {
	return "(" + std::to_string(x) + "," + std::to_string(y) + ")";
}
std::ostream& operator<<(std::ostream& os, const Point& p) {
	os << "(" << p.x << "," << p.y << ")";
	return os;
}
Point operator+(const Point& p1, const Point& p2) {
	Point result; //(0,0)
	result.x = p1.x + p2.x;
	result.y = p1.y + p2.y;
	return result;
}
Point operator-(const Point& p1, const Point& p2) {
	Point result; //(0,0)
	result.x = p1.x - p2.x;
	result.y = p1.y - p2.y;
	return result;
}
double Point::Distance() {
	return sqrt(x * x + y * y);
}
double Point::Distance(const Point& p) {
	return sqrt((p.x - x) * (p.x - x) + (p.y - y) * (p.y - y));
}




