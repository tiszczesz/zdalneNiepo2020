#include <cstdlib>
#include <ctime>
#include <iostream>
#include <vector>
using namespace std;

vector<int> GenerVec(int limit) {
	srand(time(0));
	vector<int> result;
	for(auto i=0;i<limit;i++) {
		result.push_back(rand() % 100);
	}
	return result;
}

void ShowAll(const vector<int>& dane) {
	for (auto item : dane) {
		cout << item << " ";
	}
	cout << endl;
}