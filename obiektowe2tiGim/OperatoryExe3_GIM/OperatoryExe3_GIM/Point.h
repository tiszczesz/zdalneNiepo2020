#pragma once
#include <string>
#include <iostream>
class Point
{
private:
	double x;
	double y;
public:
	//Point();
	Point(double x=0, double y=0);
	std::string Info();
	friend std::ostream& operator<<(std::ostream& os,const Point& p);//funkcja globalna zaprzyjazniona
	friend Point operator+(const Point& p1, const Point& p2);
	friend Point operator-(const Point& p1, const Point& p2);
	double Distance();
	double Distance(const Point& p);
	bool operator==(const Point& p) {
		return x == p.x && y == p.y;
	}
};

