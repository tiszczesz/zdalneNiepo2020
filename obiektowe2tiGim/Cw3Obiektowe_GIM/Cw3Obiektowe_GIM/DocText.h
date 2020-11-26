#pragma once
#include "Document.h"
#include<vector>

using namespace std;

class DocText: public Document {
private:
	vector<string> lines;

public:
	DocText(string name, int size,vector<string> lines);
	DocText();
	void Info();
};
