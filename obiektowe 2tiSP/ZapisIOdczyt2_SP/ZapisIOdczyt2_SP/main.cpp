#include <iostream>
#include <string>
#include <cstdlib>
#include <vector>

using namespace std;
int main() {
	string naglowek;
	cin >> naglowek;
	vector<string> napisy {"ala ma kota","cos innego","jeszcze tylko chwila","fsfssfsfsf sfss"};
	napisy.push_back(naglowek);
	for (auto linia : napisy) {
		cout << linia << endl;
	}
	return 0;
}