#include <string>
#include <iostream>
#include <vector>

using namespace std;

int main() {
	int count;
	cin >> count;
	vector<string> texts;
	string line;
	cin.ignore(255, '\n');
	for(int i=0;i<count;i++) {
		getline(cin, line);
		texts.push_back(line);
	}
	for (auto row : texts) {
		cout << row << endl;
	}
	return 0;
}