#pragma once
#include "Point.h"
class Circle
{
private:
	double radius;
	Point center;
public:
	Circle();
	Circle(double radius, Point center);
	friend std::ostream& operator<<(std::ostream& os, const Circle& c);
	double Area();
	double Circuit();
	void Info();
	double Distance(const Circle& c);
	bool IsCenterInOther(const Circle& c);
	bool IsOtherCenterInside(const Circle& c);
	bool IsThisInOther(const Circle& c);
	bool IsOtherInThis(const Circle& c);

	bool operator<(const Circle& c) {
		return radius < c.radius;
	}
	//todo srednica kola
};

