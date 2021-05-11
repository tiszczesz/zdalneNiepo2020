#include <iostream>
#include <string>

#include  "Circle.h"


using namespace std;



//todo przeciazyc operatory < > poprzez porownanie promieni i == promien i punkt srodkowy ten sam
// todo czyli dla Point tez napisac operator ==   !=  
int main() {
	Circle c1;
	Point p1(3,4);
	Point p2(3,4);
	
	Circle c2(3, p1);
	if(c2>c1) {
		cout << c1 << endl;
	}else {
		cout << c2 << endl;
	}
	cout << c1;


	if(p1==p2) {
		cout << "\n\tpunkty sa rowne: " << p1 << " oraz " << p2 << endl;
	}else {
		cout << "\n\tpunkty nie sa rowne: " << p1 << " oraz " << p2 << endl;
	}
	return 0;
}
