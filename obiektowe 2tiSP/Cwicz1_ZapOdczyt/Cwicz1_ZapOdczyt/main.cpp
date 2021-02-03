#include <iostream>
#include <cstdlib>
#include <ctime>
#include <cmath>
#include <vector>

using namespace std;
int main() {
	vector<int> dane;
	int rows;
	cin >> rows;
	int d, u;
	cin >> d;
	cin >> u;
	srand(time(0));
	for (int i = 1; i <= rows;i++) {
		cout <<i<<":  " << rand() % (abs(u - d)) + d << endl;
	}
	return 0;
}