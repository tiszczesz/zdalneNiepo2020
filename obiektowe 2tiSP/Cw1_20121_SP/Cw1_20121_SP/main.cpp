#include <iostream>
#include <cstdlib>
#include "Point.h"
using namespace std;

int main() {
	Point p1(14,5.9);
	Point p2(-1,4);
	cout << p1 << endl;
	cout << p2 << endl;   // p1+p2
	cout << p1 << " + " << p2 << " = " << (p1 + p2) << endl;
	return 0;
}