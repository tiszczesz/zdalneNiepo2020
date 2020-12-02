#pragma once
#include <string>

using namespace std;
class Document
{
protected:
	string name{"noname"};
	int size{0};
public:
	Document();
	Document(string name, int size);
	void Info();
	void SetName(string name) { // inline  kompilator kopiuje cialo do miejsca wywolania
		this->name = name;
	}
	string GetName() {//inline
		return name;
	}
	void SetSize(int size) {//inline
		this->size = size < 0 ? -size : size;
	}
	int GetSize() {//inline
		return size;
	}
	
};

