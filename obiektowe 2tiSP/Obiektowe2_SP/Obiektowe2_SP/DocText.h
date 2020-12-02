#pragma once
#include "Document.h"
#include <vector>
class DocText: public Document {
private:
	vector<string> content;

	//w klasie pochdnej nie mamy bezposredniego dostepu do pol prywatnych w klasi bazowej
	int getLines() {
		return content.size();
	}
	int getAllChar();
	int getOnlyAlpha();
public:
	DocText(string name, int size,vector<string> content);
	DocText();
	void Info();
};
