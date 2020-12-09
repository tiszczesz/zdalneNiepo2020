#include "DocImage.h"

#include <iostream>

DocImage::DocImage() {
	pair.height = 0;
	pair.width = 0;
	type = TypeOfImage::jpg;
}

DocImage::DocImage(string name, int size, Pair pair, TypeOfImage type) : Document(name, size) {
	this->pair = pair;
	this->type = type;
}
void DocImage::Info() {
	Document::Info();
	cout << " ===== Informacje o obrazku ========\n";
	pair.Info();
	string typ;
	switch(type) {
	case TypeOfImage::png: typ = "Obrazek png";break;
	case TypeOfImage::jpg: typ = "Obrazek jpg"; break;
	case TypeOfImage::gif: typ = "Obrazek gif"; break;
	case TypeOfImage::tiff: typ = "Obrazek tiff"; break;
	}
	cout << "Typ obrazka: " << typ << endl;
}