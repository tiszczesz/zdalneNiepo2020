#include <iostream>
#include <cstdlib>
#include <vector>

#include "Person.h"

using namespace std;

int main() {
	vector<Person> persons{ Person(),Person("Jan","Nowak",34)
		,Person("Monika","Hajduk",34),Person("Teresa","Rydzyk",22) };
	for (auto person : persons) {
		cout << person << endl;
	}
	return 0;
}