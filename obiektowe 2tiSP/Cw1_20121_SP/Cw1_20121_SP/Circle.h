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
	bool IsCenterInOther(const Circle& c);//todo
};
