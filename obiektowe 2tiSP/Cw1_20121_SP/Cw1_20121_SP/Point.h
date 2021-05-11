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

	bool operator==(const Point& p1) {
		return x == p1.x && y == p1.y;
	}
	
	double Distance(const Point& p);
	friend std::ostream& operator<<(std::ostream& os, const Point& p);
	friend Point operator+(const Point& p1, Point p2);
	friend Point operator-(const Point& p1, Point p2);
	
	
}; //!!!!!!!!
