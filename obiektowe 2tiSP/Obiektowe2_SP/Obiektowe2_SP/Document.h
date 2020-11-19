#pragma once
#include<string>

using namespace std;
class Document
{
private:
	string name;
	int size{ 0 };

public:
	Document();
	Document(string name, int size = 1000);
	void Info();
	void SetName(string name) {
		this->name = name;
	}
	void SetSize(int size) {
		this->size = size < 0 ? -size : size;
	}
	string GetName() {
		return name;
	}
	int GetSize() {
		return size;
	}
};

