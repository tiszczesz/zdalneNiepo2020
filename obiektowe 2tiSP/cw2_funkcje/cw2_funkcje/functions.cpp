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
int GetMax(const vector<int>& dane,int pocz=0) {
	int index = pocz;
	int max = dane[index];
	for (int i = pocz; i < dane.size();i++) {
		if(dane[i]>max) {
			max = dane[i];
			index = i;
		}
	}
	return index;
}
void Swap(int& a , int& b) {
	int temp = a;
	a = b;
	b = temp;
}
void SortWyb(std::vector<int>& dane) {
	for(int i=0;i<dane.size()-1;i++) {
		Swap(dane[i], dane[GetMax(dane, i)]);
	}	
}