#pragma once
#include <string>

using namespace std;
class Document
{
private:
	string name{"noname"};
	int size{0};
public:
	Document();
	Document(string name, int size);
	void Info();
	void SetName(string name) {
		this->name = name;
	}
	string GetName() {
		return name;
	}
	void SetSize(int size) {
		this->size = size < 0 ? -size : size;
	}
	int GetSize() {
		return size;
	}
	
};

