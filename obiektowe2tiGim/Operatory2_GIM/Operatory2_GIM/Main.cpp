#include <iostream>
#include <cstdlib>
#include <vector>

#include "Person.h"

using namespace std;

int main() {
	vector<Person> persons{
		Person(), Person("Jan", "Nowak", 34), Person("Monika", "Hajduk", 34), Person("Teresa", "Rydzyk", 22)
	};
	for (auto person : persons) {
		cout << person << endl;
	}
	if (persons[0] < persons[1]) {
		cout << persons[0] << endl;
	}
	else {
		cout << persons[1] << endl;
	}
	return 0;
}
