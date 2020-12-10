#pragma once
#include "Document.h"
#include "Pair.h"

enum class ImageType { jpg=1, gif=2,jpeg=3,png = 4, tiff=5 };

class DocImage :    public Document
{
private:
	Pair pair;
	ImageType type{ImageType::jpg};
	
public:
	DocImage();
	DocImage(string name, int size, Pair pair,ImageType type);
	void Info();
	string GetType() {
		switch(type) {
		case ImageType::jpg: return "Obrazek typu: jpg";
		case ImageType::jpeg: return "Obrazek typu: jpeg";
		case ImageType::gif: return "Obrazek typu: gif";
		case ImageType::tiff: return "Obrazek typu: tiff";
		case ImageType::png: return "Obrazek typu: png";
		/*default: return "Typ nieokreslony";*/
		}
	}
};




