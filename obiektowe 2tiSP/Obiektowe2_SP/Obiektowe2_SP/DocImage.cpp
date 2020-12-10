#include "DocImage.h"

#include <iostream>

DocImage::DocImage():Document() {
	pair.height= 0;
	pair.width = 0;
	type = ImageType::jpg;
}
DocImage::DocImage(string name, int size, Pair pair,ImageType type):Document(name,size) {
	//Pair pair;
	this->pair = pair;
	this->type = type;
}
void DocImage::Info() {
	cout << " Szczegolowe informacje o obrazku  " << endl;
	Document::Info();
	cout << GetType() <<"   "<< pair.Info() << endl;
}


