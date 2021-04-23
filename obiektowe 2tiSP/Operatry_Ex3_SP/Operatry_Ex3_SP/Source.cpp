#include <iostream>
#include <string>

#include  "Circle.h"
#include  "Point.h"

using namespace std;


//bool operator==(const Point& p1, const Point& p2);
//todo przeciazyc operatory < > poprzez porownanie promieni i == promien i punkt srodkowy ten sam
// todo czyli dla Point tez napisac operator ==   !=  
int main() {
	Circle c1;
	Point p1;
	Point p2(3,4);
	if(p1 == p2) {
		cout << "takie same punkty: " << p1 << endl << p2 << endl;
	}else {
		cout << "nie takie same punkty: " << p1 << endl << p2 << endl;
	}
	Circle c2(3, p1);
	if(c2>c1) {
		cout << c1 << endl;
	}else {
		cout << c2 << endl;
	}
	cout << c1;
	return 0;
}
