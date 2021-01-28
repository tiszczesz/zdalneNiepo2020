#include <iostream>
#include <cstdlib>
#include "Point.h"

using namespace std;

int main() {
	Point p1(3,4);
	Point p2(2, 6);
	cout << p1 << endl;
	cout << p1 << " + " << p2 << " = " << (p1 + p2) << endl;
	cout << p1 << " - " << p2 << " = " << (p1 - p2) << endl;
	return 0;
}