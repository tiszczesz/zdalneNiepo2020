#pragma once

#include "Point.h"

#include <cmath>
#include <corecrt_math_defines.h>


class Circle
{
private:
	double radius{ 0 };
	Point center;

public:
	Circle();
	Circle(double radius, Point p);
	friend std::ostream& operator<<(std::ostream& os, const Circle& c);
	double Area() {
		return M_PI * radius * radius;
	}
	double Circuit() {
		return 2 * M_PI * radius;
	}
	double Distance() {
		return center.Distance();
	}
	double Distance(const Circle & c) {
		return center.Distance(c.center);
	}
	void Info();
	bool IsCenterInside(const Circle& c) {
		return Distance(c) < radius;
	}
	bool IsWholeInside(const Circle& c) {
		return Distance(c) + c.radius <= radius;
		//czy kolo c jest ca³e wewn¹trz tego ko³a
	}
	bool IsThisCircleInside(const Circle & c) {
		return Distance(c) + radius <= c.radius;
		//czy nasze kolo  jest ca³e wewn¹trz  ko³a c
	}
	void SetRadius(double radius ) {
		this->radius = radius;
	}

	//todo Czy maja wsplna czesc
	//todo czy maja 1 punkt wspolny
	//todo czy maja 2 punkty wspolne
};

