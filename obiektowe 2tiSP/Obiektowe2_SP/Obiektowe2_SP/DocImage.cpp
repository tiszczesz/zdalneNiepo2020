#include "DocImage.h"
DocImage::DocImage():Document() {
	pair.height= 0;
	pair.width = 0;
}
DocImage::DocImage(string name, int size, Pair pair):Document(name,size) {
	this->pair = pair;
}
void DocImage::Info() {
	std::cout 
}


