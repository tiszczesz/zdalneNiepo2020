#pragma once
#include <string>
#include <iostream>
struct Point //domyslnie wszystkie skladowe publiczne
{
private:
	double x;
	double y;
public:
	Point();
	Point(double x, double y);
	std::string Info();
	double Distance();
	friend std::ostream& operator<<(std::ostream& os, const Point& p);
	friend Point operator+(const Point& p1, const Point p2);
};//!!!!!!!!

