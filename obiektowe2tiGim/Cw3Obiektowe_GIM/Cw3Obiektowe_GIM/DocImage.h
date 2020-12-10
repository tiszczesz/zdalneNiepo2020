#pragma once
#include "Document.h"
#include "Pair.h"


enum class TypeOfImage {
	jpg =1, png = 2, gif = 3, tiff = 4
};
class DocImage :    public Document {
private:
	Pair pair;
	TypeOfImage type{TypeOfImage::jpg};
public:
	DocImage();
	DocImage(string name, int size, Pair pair, TypeOfImage type);
	void Info();
};

