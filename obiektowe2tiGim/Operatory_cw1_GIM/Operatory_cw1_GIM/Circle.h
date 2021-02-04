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
	bool IsCenterIn(const Circle& c) {
		return Distance(c) < radius;
	}
};

