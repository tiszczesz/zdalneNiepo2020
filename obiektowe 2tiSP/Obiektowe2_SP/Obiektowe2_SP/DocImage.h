#pragma once
#include "Document.h"
#include "Pair.h"
class DocImage :    public Document
{
private:
	Pair pair;
public:
	DocImage();
	DocImage(string name, int size, Pair pair);
	void Info();
};

